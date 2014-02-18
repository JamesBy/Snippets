package com.soreleg.MustTool;

import com.google.ads.AdRequest;
import com.google.ads.AdView;
import com.soreleg.MustTool.R;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Color;
import android.os.Bundle;
import android.text.Editable;
import android.text.TextWatcher;
import android.view.KeyEvent;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.AdapterView.OnItemSelectedListener;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.TextView.OnEditorActionListener;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends Activity implements OnClickListener,
		TextWatcher, OnItemSelectedListener, OnItemClickListener,
		OnEditorActionListener {

	TextView tvEnterHeight, tvBigHeight, tvSmallHeight, tvEnterWeight,
			tvBigWeight, tvSmallWeight, tvHeader, tvHeadingScore;
	EditText etBigHeight, etSmallHeight, etBigWeight, etSmallWeight;
	View loAgeandGender, loHeightInput;
	Button bMUAC, next;

	Spinner spinner;
	String[] paths = { "CM", "FT/IN", "ULNA" };

	Spinner spinner2;
	String[] paths2 = { "KGs", "St Lbs" };

	Spinner spinner3;
	String[] paths3 = { "Male", "Female" };

	Spinner spinner4;
	String[] paths4 = { "Age < 65", "Age >= 65" };

	Boolean firstPassHeight, firstPassWeight;
	float bmiFinal;
	boolean MUACMethod = false;
	int MUACNo = 9;
	int finalBmiScore = 9;
	float height;
	float weight;
	float heightType = 1; // 1 = metric, 2 = imperial, 3 = other
	float weightType = 1;
	Intent a;
	Bundle sendScoreSoFar;
	float[] screen2Values = null;
	double[][] ULNAnumbers;
	boolean inMUACState = false;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		setupVairibles();
		
		AdView Ad = (AdView)findViewById(R.id.ad);
		Ad.loadAd(new AdRequest());
		
		a = new Intent(MainActivity.this, Screen2.class);

	}

	private void setupVairibles() {

		firstPassHeight = firstPassWeight = true;

		tvHeader = (TextView) findViewById(R.id.tvHeading);

		tvEnterHeight = (TextView) findViewById(R.id.tvEnterHeight);
		tvBigHeight = (TextView) findViewById(R.id.tvHeightBig);
		etBigHeight = (EditText) findViewById(R.id.etHeightBig);
		tvSmallHeight = (TextView) findViewById(R.id.tvHeightSmall);
		etSmallHeight = (EditText) findViewById(R.id.etHeightSmall);
		tvEnterWeight = (TextView) findViewById(R.id.tvEnterWeight);
		tvBigWeight = (TextView) findViewById(R.id.tvWeightBig);
		etBigWeight = (EditText) findViewById(R.id.etWeightBig);
		tvSmallWeight = (TextView) findViewById(R.id.tvWeightSmall);
		etSmallWeight = (EditText) findViewById(R.id.etWeightSmall);
		loAgeandGender = (View) findViewById(R.id.loAgeGender);
		loHeightInput = (View) findViewById(R.id.layoutHeight);

		next = (Button) findViewById(R.id.bNext);
		// Button back = (Button) findViewById(R.id.bBack);
		next.setOnClickListener(this);
		bMUAC = (Button) findViewById(R.id.bMUAC);
		bMUAC.setOnClickListener(this);

		etBigHeight.addTextChangedListener(this);
		etSmallHeight.addTextChangedListener(this);
		etBigWeight.addTextChangedListener(this);
		etSmallWeight.addTextChangedListener(this);

		ArrayAdapter<String> adapter = new ArrayAdapter<String>(
				MainActivity.this, R.layout.spintext, paths);

		spinner = (Spinner) findViewById(R.id.spHeight);
		spinner.setAdapter(adapter);
		spinner.setOnItemSelectedListener(this);

		ArrayAdapter<String> adapter2 = new ArrayAdapter<String>(
				MainActivity.this, R.layout.spintext, paths2);

		spinner2 = (Spinner) findViewById(R.id.spWeight);
		spinner2.setAdapter(adapter2);
		spinner2.setOnItemSelectedListener(this);

		ArrayAdapter<String> adapter3 = new ArrayAdapter<String>(
				MainActivity.this, R.layout.spintext, paths3);

		spinner3 = (Spinner) findViewById(R.id.spinMF);
		spinner3.setAdapter(adapter3);
		spinner3.setOnItemSelectedListener(this);

		ArrayAdapter<String> adapter4 = new ArrayAdapter<String>(
				MainActivity.this, R.layout.spintext, paths4);

		spinner4 = (Spinner) findViewById(R.id.spinAge);
		spinner4.setAdapter(adapter4);
		spinner4.setOnItemSelectedListener(this);

		// calculation variables
		//reset these values
		float resultHeight = 0;
		heightType = 1;
		weightType = 1;
		bmiFinal = 0;
		MUACMethod = false;
		MUACNo = 9;
		finalBmiScore = 9;
		height = 0;
		weight = 0;
		heightType = 1; // 1 = metric, 2 = imperial, 3 = other
		weightType = 1;
		float[] screen2Values = null;
		double[][] ULNAnumbers;
		boolean inMUACState = false;

	}

	@Override
	public void onClick(View arg0) {
		if (arg0.getId() == R.id.bNext) {

			Bundle sendScoreSoFar = new Bundle();
			if (finalBmiScore == 3)
				finalBmiScore = 0;
			float[] DataArray = { bmiFinal, (float) finalBmiScore, heightType,
					height, weightType, weight };
			sendScoreSoFar.putFloatArray("the data", DataArray);
			if (screen2Values != null) {
				sendScoreSoFar.putFloatArray("screenstate", screen2Values);
			}

			// Intent a = new Intent(MainActivity.this, Screen2.class);
			a.putExtras(sendScoreSoFar);
			a.setFlags(Intent.FLAG_ACTIVITY_REORDER_TO_FRONT);
			a.setClassName(this, "com.soreleg.MustTool.Screen2");
			// startActivityForResult(a, 0);
			validate();
		} else if (arg0.getId() == R.id.bMUAC) {
			String warningMessage;
			if (inMUACState == false)
				warningMessage = "Estimate BMI using mid arm upper circumference (MUAC)?";
			else
				warningMessage = "Reset to normal input mode?";

			DialogInterface.OnClickListener dialogClickListener = new DialogInterface.OnClickListener() {
				@Override
				public void onClick(DialogInterface dialog, int which) {
					switch (which) {
					case DialogInterface.BUTTON_POSITIVE:
						if (inMUACState == false) {

							Intent openStartingPoint = new Intent(
									"com.soreleg.MustTool.MUACSPLASH");
							startActivity(openStartingPoint);
							bMUAC.setText("Restore");
							inMUACState = true;
							MUACMethod = true;
							weightType = 3;
							tvEnterWeight.setText("Enter MUAC (CM)");
							tvBigWeight.setText("CM");
							etBigWeight.setText("");
							etSmallWeight.setText("");
							etSmallWeight.setVisibility(View.GONE);
							tvSmallWeight.setVisibility(View.GONE);
							spinner2.setVisibility(View.GONE);
							etBigHeight.setText("");
							etSmallHeight.setText("");
							loHeightInput.setVisibility(View.GONE);

						} else {
							Intent intent = getIntent();
							finish();
							intent.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
							startActivity(intent);
						}
						break;

					case DialogInterface.BUTTON_NEGATIVE:
						// No button clicked
						break;
					}
				}
			};

			AlertDialog.Builder builder = new AlertDialog.Builder(this);

			builder.setMessage(warningMessage)
					.setPositiveButton("Yes", dialogClickListener)
					.setNegativeButton("No", dialogClickListener)
					.setTitle("Input Mode").show();// TODO Auto-generated
													// method stub

		}
	}

	private void validate() {
		String warningMessage = "Click 'Yes' to continue";
		if (!inMUACState) {
			if (((height >= 2) || (height <= 1.4))
					&& (weightType != 3 && ((weight < 35) || (weight > 135))))
				warningMessage = "Warning: Height and Weight are both outside normal range. Continue to step 2?";
			else if ((height >= 2) || (height <= 1.4))
				warningMessage = "Warning: Height is outside normal range. Continue to step 2?";
			else if (((weight < 35) || (weight > 135)) && weightType != 3)
				warningMessage = "Warning: Weight is outside normal range. Continue to step 2?";
		}
		DialogInterface.OnClickListener dialogClickListener = new DialogInterface.OnClickListener() {
			@Override
			public void onClick(DialogInterface dialog, int which) {
				switch (which) {
				case DialogInterface.BUTTON_POSITIVE:
					startActivityForResult(a, 0);
					// Yes button click
					break;

				case DialogInterface.BUTTON_NEGATIVE:
					// No button clicked
					break;
				}
			}
		};

		AlertDialog.Builder builder = new AlertDialog.Builder(this);

		builder.setMessage(warningMessage)
				.setPositiveButton("Yes", dialogClickListener)
				.setNegativeButton("No", dialogClickListener)
				.setTitle("Measurements Checked?").show();// TODO Auto-generated
														// method stub

	}

	@Override
	protected void onActivityResult(int requestCode, int resultCode, Intent data) {
		super.onActivityResult(requestCode, resultCode, data);
		if (resultCode == RESULT_OK) {
			Bundle basket = data.getExtras();
			screen2Values = basket.getFloatArray("screenvalues");
		}

	}

	@Override
	public void onItemSelected(AdapterView<?> arg0, View arg1, int arg2,
			long arg3) {
		if ((arg0.getId()) == R.id.spHeight) {
			if (firstPassHeight) {// do not run until item changed
				firstPassHeight = false;
			} else {
				int position = spinner.getSelectedItemPosition();
				switch (position) {
				case 0:
					tvEnterHeight.setText("Enter Height");
					tvBigHeight.setText("CM");
					heightType = 1;
					etBigHeight.setText("");
					etSmallHeight.setText("");
					tvSmallHeight.setVisibility(View.INVISIBLE);
					etSmallHeight.setVisibility(View.INVISIBLE);
					loAgeandGender.setVisibility(View.GONE);
					break;
				case 1:
					tvBigHeight.setText("Feet");
					heightType = 2;
					// tvSmallHeight.setText("Inches");
					tvSmallHeight.setVisibility(View.VISIBLE);
					tvEnterHeight.setText("Enter Height");
					etBigHeight.setText("");
					etSmallHeight.setText("");
					etSmallHeight.setVisibility(View.VISIBLE);
					loAgeandGender.setVisibility(View.GONE);
					break;
				case 2:
					Intent openStartingPoint = new Intent(
							"com.soreleg.MustTool.ULNASPLASH");
					startActivity(openStartingPoint);
					height = 0;
					bmiFinal = 0;
					finalBmiScore = 9;
					tvHeader.setText("Step 1 (BMI)");
					ULNAnumbers = populateULNA();
					loAgeandGender.setVisibility(View.VISIBLE);
					tvEnterHeight.setText("Enter Ulna Length");
					heightType = 3;
					tvBigHeight.setText("CM 18.5 - 32");
					etBigHeight.setText("");
					etSmallHeight.setText("");
					tvSmallHeight.setVisibility(View.INVISIBLE);
					etSmallHeight.setVisibility(View.INVISIBLE);
					tvHeader.setBackgroundColor(Color.parseColor("#E6E6B8"));
					break;
				}

			}
		} else if ((arg0.getId()) == R.id.spWeight) {
			if (firstPassWeight) {
				firstPassWeight = false;
			} else {
				int position = spinner2.getSelectedItemPosition();
				switch (position) {
				case 0:
					MUACMethod = false;
					tvEnterWeight.setText("Enter Weight");
					tvBigWeight.setText("Kilos");
					weightType = 1;
					etBigWeight.setText("");
					etSmallWeight.setText("");
					tvSmallWeight.setVisibility(View.INVISIBLE);
					etSmallWeight.setVisibility(View.INVISIBLE);
					etBigHeight.setFocusableInTouchMode(true);
					etSmallHeight.setFocusableInTouchMode(true);
					tvHeader.setBackgroundColor(Color.rgb(230, 230, 184));
					tvHeader.setText("BMI Calculator");
					break;
				case 1:
					tvBigWeight.setText("Stones");
					tvSmallWeight.setText("Pounds");
					weightType = 2;
					tvEnterWeight.setText("Enter Weight");
					etBigWeight.setText("");
					etSmallWeight.setText("");
					tvSmallWeight.setVisibility(View.VISIBLE);
					etSmallWeight.setVisibility(View.VISIBLE);
					etBigHeight.setFocusableInTouchMode(true);
					etSmallHeight.setFocusableInTouchMode(true);
					MUACMethod = false;
					etSmallHeight.setFocusable(true);
					tvHeader.setBackgroundColor(Color.rgb(230, 230, 184));
					tvHeader.setText("BMI Calculator");
					break;

				}
			}
		} else if ((arg0.getId() == R.id.spinMF)
				|| (arg0.getId() == R.id.spinAge)) {
			afterTextChanged(null);
		}

	}

	@Override
	public void afterTextChanged(Editable arg0) {

		float bmiresult = 0;

		height = getHeight();
		weight = getWeight();

		if (MUACMethod) {
			MUACNo = (int) weight;
			if (MUACNo == 0)
				tvHeader.setText("BMI is likely >20 and <30");
			else if (MUACNo == 2)
				tvHeader.setText("BMI is likely <20");
			else if (MUACNo == 3)
				tvHeader.setText("BMI is likely >30");
			else if (MUACNo == 9)
				tvHeader.setText("BMI Calculator");

			if (MUACNo == 3) finalBmiScore = 0;//change obese score to 0
			else finalBmiScore = MUACNo;

			// } else

		} else if (height > 0 && weight > 0) {
			// if (heightType == 3) {// ULNA
			// ULNAnumbers = populateULNA();
			// tvHeader.setText("ulna populated" + (ULNAnumbers[2][4]));
			// }
			bmiresult = (weight / (height * height));
			bmiFinal = bmiresult;
			tvEnterHeight.setText(String.format("%s %.0f %s", "Height is",
					height * 100, "cm"));
			tvEnterWeight.setText(String.format("%s %.02f %s", "Weight is",
					weight, "kgs"));
			tvHeader.setText(String.format("%s %.0f %s", " BMI: ", bmiFinal,
					" "));
			finalBmiScore = getBmiScore();

		}

		if (finalBmiScore == 3) {
			tvHeader.setBackgroundColor(Color.WHITE);

		} else if (finalBmiScore == 0) {
			tvHeader.setBackgroundColor(Color.GREEN);

		} else if (finalBmiScore == 1) {
			tvHeader.setBackgroundColor(Color.YELLOW);

		} else if (finalBmiScore == 2) {
			tvHeader.setBackgroundColor(Color.RED);

		}
	}

	private int getBmiScore() {
		int i = 3;
		if ((bmiFinal > 8) && (bmiFinal <= 18.5)) {
			i = 2;
		} else if ((bmiFinal > 18.5) && (bmiFinal <= 20)) {
			i = 1;

		} else if ((bmiFinal > 20) && (bmiFinal <= 30)) {
			i = 0;
		} else if (bmiFinal > 30) {
			i = 3;
		} else {
			i = 9;// error
		}
		return i;
	}

	private float getHeight() {
		float resultHeight = 0;
		boolean e = isEmpty(etBigHeight);
		boolean f = isEmpty(etSmallHeight);

		if (!e) {// if user deletes et - null exception
			String heightString = etBigHeight.getText().toString().trim();
			String heightStringSm = etSmallHeight.getText().toString().trim();
			float rawHeightBig = Float.parseFloat(heightString);
			float rawHeightSmall;

			if (!f)
				rawHeightSmall = Float.parseFloat(heightStringSm);
			else
				rawHeightSmall = 0;

			int whichone = spinner.getSelectedItemPosition();
			switch (whichone) {
			case 0: // Metric cm
				// tvHeader.setText("inside metric numbers" + rawHeightBig);
				if (rawHeightBig >= 30 && rawHeightBig <= 200) // if patient is
																// taller than
																// 30cm..
					resultHeight = rawHeightBig;

				break;
			case 1: // Imperial
				// tvHeader.setText("inside imperial numbers" + rawHeightBig);
				if ((rawHeightBig > 2 && rawHeightBig < 10)
						&& (rawHeightSmall >= 0 && rawHeightSmall <= 12)) {
					// between 2 and 10 foot tall, 0 - 12 inches
					resultHeight = (((rawHeightBig * 12) + rawHeightSmall) * 2.54f);
				}

				break;
			case 2:
				// ULNAnumbers = populateULNA();
				// tvHeader.setText("inside ulna numbers" + rawHeightBig);
				if ((rawHeightBig >= 18.3) && (rawHeightBig <= 32.2)) {// height
																		// rounded
																		// off
																		// to .5

					rawHeightBig = rawHeightBig * 2;
					// rawHeightBig = (int) rawHeightBig;
					rawHeightBig = Math.round(rawHeightBig);
					rawHeightBig = rawHeightBig / 2; // round off to nearest .5
					tvHeader.setText("inside ulna numbers" + rawHeightBig);
					int arrayNumber;
					if (spinner3.getSelectedItemPosition() == 0) { // man
						if (spinner4.getSelectedItemPosition() == 0) // <65
							arrayNumber = 0;
						else
							arrayNumber = 1;// >=65
					} else {// woman
						if (spinner4.getSelectedItemPosition() == 0) // <65
							arrayNumber = 2;
						else
							arrayNumber = 3;// >=65
					}
					float key = 32;
					for (int i = 0; i <= 28; i++) {
						if (key == rawHeightBig) {
							resultHeight = (float) ULNAnumbers[arrayNumber][i];
							i = 29;
						}
						key = (float) (key - .5);
					}
					resultHeight = resultHeight * 100;
					tvHeader.setText("" + resultHeight);

				}
				break;
			}

		}

		resultHeight = resultHeight / 100;// change to metres
		return resultHeight;
	}

	private boolean isEmpty(EditText etText) {
		String s = etText.getText().toString();
		
			if ((etText.getText().toString().trim().length() > 0)) {
				if (s.equals("."))
					return true;
				else return false;
			} else {
				return true;
			}
		
	}

	private float getWeight() {
		float resultWeight = 0;
		boolean e = isEmpty(etBigWeight);
		boolean f = isEmpty(etSmallWeight);
		String weightString = etBigWeight.getText().toString().trim();
		String weightStringSm = etSmallWeight.getText().toString().trim();
		float rawWeightBig;
		if (!e)
			rawWeightBig = Float.parseFloat(weightString);
		else
			rawWeightBig = 0;

		float rawWeightSmall;
		if (!f)
			rawWeightSmall = Float.parseFloat(weightStringSm);
		else
			rawWeightSmall = 0;

		int whichone = spinner2.getSelectedItemPosition();
		switch (whichone) {
		case 0: // Metric Kilos

			if ((rawWeightBig <= 200)
					&& (rawWeightSmall >= 0 && rawWeightSmall < 1000))
				resultWeight = rawWeightBig;

			break;
		case 1: // Imperial
			if ((rawWeightBig < 100) && (rawWeightSmall >= 0)) {
				resultWeight = ((rawWeightBig * 6.35029f) + (rawWeightSmall * .453592f));

			}
			break;
		}

		if (weightType == 3) {// MUAC
			if ((rawWeightBig > 0) && (rawWeightBig < 23.5))
				resultWeight = 2;
			else if ((rawWeightBig >= 23.5) && (rawWeightBig <= 32))
				resultWeight = 0;
			else if (rawWeightBig > 32)
				resultWeight = 3;// (obese) score0
			else
				resultWeight = 9;// error

		}
		return resultWeight;// TODO Auto-generated method stub
	}

	public double[][] populateULNA() {

		double[] f0 = { 1.94, 1.93, 1.91, 1.89, 1.87, 1.85, 1.84, 1.82, 1.80,
				1.78, 1.76, 1.75, 1.73, 1.71, 1.69, 1.67, 1.66, 1.64, 1.62,
				1.60, 1.58, 1.57, 1.55, 1.53, 1.51, 1.49, 1.48, 1.46 };

		double[] f1 = { 1.87, 1.86, 1.84, 1.82, 1.81, 1.79, 1.78, 1.76, 1.75,
				1.73, 1.71, 1.70, 1.68, 1.67, 1.65, 1.63, 1.62, 1.60, 1.59,
				1.57, 1.56, 1.54, 1.52, 1.51, 1.49, 1.48, 1.46, 1.45 };

		double[] f2 = { 1.84, 1.83, 1.81, 1.80, 1.79, 1.77, 1.76, 1.75, 1.73,
				1.72, 1.70, 1.69, 1.68, 1.66, 1.65, 1.63, 1.62, 1.61, 1.59,
				1.58, 1.56, 1.55, 1.54, 1.52, 1.51, 1.50, 1.48, 1.47 };

		double[] f3 = { 1.84, 1.83, 1.81, 1.79, 1.78, 1.76, 1.75, 1.73, 1.71,
				1.70, 1.68, 1.66, 1.65, 1.63, 1.61, 1.60, 1.58, 1.56, 1.55,
				1.53, 1.52, 1.50, 1.48, 1.47, 1.45, 1.44, 1.42, 1.40 };

		double[][] result = { f0, f1, f2, f3 };
		return result;
	}

	@Override
	public void beforeTextChanged(CharSequence arg0, int arg1, int arg2,
			int arg3) {

	}

	@Override
	public void onTextChanged(CharSequence arg0, int arg1, int arg2, int arg3) {

	}

	@Override
	public boolean onEditorAction(TextView arg0, int arg1, KeyEvent arg2) {

		return false;
	}

	@Override
	public void onNothingSelected(AdapterView<?> arg0) {
		// TODO Auto-generated method stub
	}

	@Override
	public void onItemClick(AdapterView<?> arg0, View arg1, int arg2, long arg3) {

	}

}