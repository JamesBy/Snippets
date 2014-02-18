----------------------------------------------------------------------------------
--
-- scenetemplate.lua
--
----------------------------------------------------------------------------------

local storyboard = require( "storyboard" )
local scene = storyboard.newScene()


-- Called when the scene's view does not exist:
function scene:createScene( event )
	local group = self.view

	
	-----------------------------------------------------------------------------
	
end


-- Called immediately after scene has moved onscreen:
function scene:enterScene( event )
	local group = self.view
	storyboard.removeAll()


	local prams = event.params
      	  print('have we got a parameter?: ' .. prams.var1)
      	  --print(params.var2)
      	  --print(params.var3)

	
	-----------------------------------------------------------------------------
		

--import the table view library
local tableView = require("tableView")

-- ui library for buttons 
local ui = require("ui") 
display.setStatusBar( display.HiddenStatusBar ) 
--initial values

local screenOffsetW, screenOffsetH = display.contentWidth -  display.viewableContentWidth, display.contentHeight - display.viewableContentHeight 
-- used for offsetting buttons
-- display.viewableContentWidth = A read-only property that contains the width of the viewable screen area in content coordinates.
-- In cases where you use scaling sometimes content is scaled where some appears off screen. Only viewable content gets considered here

local myList

--Setup the nav bar 
local navBar = ui.newButton{
	default = "images/buttonbar.png",
	onRelease = scrollToTop
	
}

navBar.x = display.contentWidth*.5
navBar.y = math.floor(display.screenOriginY + navBar.height*0.5+30) -- screenOriginY is used in cases like iphone 5 where borders are added to screen


local navHeader = display.newText("Cars", 0, 0, native.systemFontBold, 16)
navHeader:setTextColor(0,0,0)
navHeader.x = display.contentWidth*.5
navHeader.y = navBar.y

local background = display.newRect(0, 0, display.contentWidth, display.contentHeight)
background:setFillColor(77, 77, 77)
group:insert(background)
 
--setup the table
local data = {}  

--setup a color fill for selected items
local selected = display.newRect(0, 0, 50, 50)  --add acolor fill to show the selected item

selected:setFillColor(67,141,241,180)  --set the color fill to light blue
selected.isVisible = false  --hide color fill until needed

--setup functions to execute on touch of the list view items
function listButtonRelease( event )
	self = event.target -- the target is the row 
	local id = self.id  -- this is the row id in the table

	--print(self.data.title) -- the rows data.title
    --print(self.data.subtitle) -- the rows data.subtitle
    --print(self.data.image) -- the rows data.image
		
	local options =
	{
    params =
   		 {
      	  var1 = self.data.title,
      	  var2 = self.data.subtitle,
      	  var3 = self.data.image,
      	  var4 = prams.var1 --pass on for the back button
  		 }
	}

	storyboard.gotoScene( "showdescription", options )

end

--setup each row as a new table, then add title, subtitle, and image
if prams.var1 == 'car' then
	navHeader.text = "Cars"
	data[1] = {}
	data[1].title = "VW Golf"
	data[1].subtitle = "Mid Engined Hatchback"
	data[1].image = "images/vpics/vpicsmall/golf.png"

	data[2] = {}
	data[2].title = "Toyota Corolla"
	data[2].subtitle = "Mid Engined Hatchback"
	data[2].image = "images/vpics/vpicsmall/corolla.png"

	data[3] = {}
	data[3].title = "Toyota Yaris"
	data[3].subtitle = "Small Economical Hatchback"
	data[3].image = "images/vpics/vpicsmall/yaris.png"

	data[4] = {}
	data[4].title = "Mercedes C Class"
	data[4].subtitle = "High End Comfort"
	data[4].image = "images/vpics/vpicsmall/merc.png"

	data[5] = {}
	data[5].title = "Suzuki Jeep"
	data[5].subtitle = "4wd plus comfort!"
	data[5].image = "images/vpics/vpicsmall/suzukijeep.png"

	data[6] = {}
	data[6].title = "Mercedes Jeep"
	data[6].subtitle = "4wd plus lots of comfort!"
	data[6].image = "images/vpics/vpicsmall/mercjeep.png"

elseif prams.var1 == 'motorcycle' then
	navHeader.text = "Motorcycles"
	data[1] = {}
	data[1].title = "Honda CBR 1000"
	data[1].subtitle = "Clean Refined."
	data[1].image = "images/vpics/vpicsmall/cbr1100.png"

	data[2] = {}
	data[2].title = "Ducati D1199"
	data[2].subtitle = "Good looking, and sounding."
	data[2].image = "images/vpics/vpicsmall/d1199.png"

	data[3] = {}
	data[3].title = "BMW GS 1200"
	data[3].subtitle = "Going off Road?"
	data[3].image = "images/vpics/vpicsmall/gs1200.png"

	data[4] = {}
	data[4].title = "Aprilla RSV4"
	data[4].subtitle = "Twin Power"
	data[4].image = "images/vpics/vpicsmall/rsv4.png"

	data[5] = {}
	data[5].title = "BMW S1000"
	data[5].subtitle = "Fast, light."
	data[5].image = "images/vpics/vpicsmall/s1000.png"

	data[6] = {}
	data[6].title = "Yamaha R1"
	data[6].subtitle = "Cross plane cranked fun."
	data[6].image = "images/vpics/vpicsmall/r1.png"

elseif prams.var1 == 'van' then

	navHeader.text = "Vans"

	data[1] = {}
	data[1].title = "VW Caddy - Small"
	data[1].subtitle = "Need something smaller?"
	data[1].image = "images/vpics/vpicsmall/vwvan.png"

	data[2] = {}
	data[2].title = "Nissan Primastar"
	data[2].subtitle = "Mid sized, economical"
	data[2].image = "images/vpics/vpicsmall/nissanvan.png"

	data[3] = {}
	data[3].title = "Peugeot Expert"
	data[3].subtitle = "Mid sized, economical"
	data[3].image = "images/vpics/vpicsmall/peug.png"

	data[4] = {}
	data[4].title = "Renault Traffic"
	data[4].subtitle = "Mid sized, economical"
	data[4].image = "images/vpics/vpicsmall/renvan.png"

	data[5] = {}
	data[5].title = "Ford Transit Low Roof"
	data[5].subtitle = "Mid sized, economical"
	data[5].image = "images/vpics/vpicsmall/stransit.png"

	data[6] = {}
	data[6].title = "VW Large"
	data[6].subtitle = "Another choice in oversized vans."
	data[6].image = "images/vpics/vpicsmall/vwbigvan.png"

	data[7] = {}
	data[7].title = "Ford Transit Large"
	data[7].subtitle = "Need a bit more space?"
	data[7].image = "images/vpics/vpicsmall/ford_transit.png"

	

elseif prams.var1 == 'camper' then

	navHeader.text = "Campers"

	data[1] = {}
	data[1].title = "VW Camper (old style)"
	data[1].subtitle = "Going hippy style?"
	data[1].image = "images/vpics/vpicsmall/oldvwcamp.png"

	data[2] = {}
	data[2].title = "Fiat Ducato"
	data[2].subtitle = "Modern Style"
	data[2].image = "images/vpics/vpicsmall/fiatcamp.png"

	data[3] = {}
	data[3].title = "Vw Expander"
	data[3].subtitle = "Econimical on fuel"
	data[3].image = "images/vpics/vpicsmall/vwmoderncamp.png"

	data[4] = {}
	data[4].title = "Mercedes Camper"
	data[4].subtitle = "High End Comfort"
	data[4].image = "images/vpics/vpicsmall/mercamp.png"

	data[5] = {}
	data[5].title = "Fiat Ducato"
	data[5].subtitle = "Even more economical!"
	data[5].image = "images/vpics/vpicsmall/fiatcamper.png"

	data[6] = {}
	data[6].title = "Trailer Camper"
	data[6].subtitle = "Want to take your own vehicle?"
	data[6].image = "images/vpics/vpicsmall/trailercamp.png"

end




local topBoundary = display.screenOriginY + 70
local bottomBoundary = display.screenOriginY + 0

-- create the list of items

	myList = tableView.newList{
	data=data, --A table containing elements that the list can iterate through to display in each row.
	default="images/listItemBg.png", --An image for the row background. Defines the hit area for the touch.
	over="images/listItemBg_over.png", --An image that will show on touch.
	onRelease=listButtonRelease, --A function name that defines the action to take after a row is tapped.
	top=topBoundary, --The upper boundary of the list. The list will start and snap back to this position.
	bottom=bottomBoundary, --The bottom boundary of the list. The list will snap back to this position when scrolled upward.
	
	-- callback = A function that defines how to display the data in each row. Each element in the data table will be used in place of the 
    -- argument ("item")  assigned to the callback function. 
    callback = function( row ) 
                         local g = display.newGroup()

                         local img = display.newImage(row.image)
                         g:insert(img)
                         img.x = math.floor(img.width*0.5 + 6)
                         img.y = math.floor(img.height*0.7) 

                         local title =  display.newText( row.title, 0, 0, native.systemFontBold, 14 )
                         title:setTextColor(0, 0, 0)
                         g:insert(title)
                         title.x = title.width*0.5 + img.width + 6
                         title.y = 30

                         local subtitle =  display.newText( row.subtitle, 0, 0, native.systemFont, 12 )
                         subtitle:setTextColor(80,80,80)
                         g:insert(subtitle)
                         subtitle.x = subtitle.width*0.5 + img.width + 6
                         subtitle.y = title.y + title.height + 6

                         return g  


                  end 
}
group:insert(myList)

local function scrollToTop()
	myList:scrollTo(topBoundary)
end

group:insert(navBar)


group:insert(navHeader)

--Add a white background to the list.  

local listBackground = display.newRect( 0, 0, myList.width, myList.height )
listBackground:setFillColor(255,255,255)
myList:insert(1,listBackground)


	-----------------------------------------------------------------------------
	
end


-- Called when scene is about to move offscreen:
function scene:exitScene( event )
	local group = self.view
	
	-----------------------------------------------------------------------------
	
	--	INSERT code here (e.g. stop timers, remove listeners, unload sounds, etc.)
	
	-----------------------------------------------------------------------------
	
end


-- Called prior to the removal of scene's "view" (display group)
function scene:destroyScene( event )
	local group = self.view
	
	-----------------------------------------------------------------------------
	
	--	INSERT code here (e.g. remove listeners, widgets, save state, etc.)
	
	-----------------------------------------------------------------------------
	
end


---------------------------------------------------------------------------------
-- END OF YOUR IMPLEMENTATION
---------------------------------------------------------------------------------

-- "createScene" event is dispatched if scene's view does not exist
scene:addEventListener( "createScene", scene )

-- "enterScene" event is dispatched whenever scene transition has finished
scene:addEventListener( "enterScene", scene )

-- "exitScene" event is dispatched before next scene's transition begins
scene:addEventListener( "exitScene", scene )

-- "destroyScene" event is dispatched before view is unloaded, which can be
-- automatically unloaded in low memory situations, or explicitly via a call to
-- storyboard.purgeScene() or storyboard.removeScene().
scene:addEventListener( "destroyScene", scene )

---------------------------------------------------------------------------------

return scene