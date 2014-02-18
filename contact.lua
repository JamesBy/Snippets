----------------------------------------------------------------------------------
--
-- contact.lua
--
-- Programmer: James Byrne
-- Student Number: D12127553
--
-- WebvElevate 2.1 Symmester 2 
--
-- Corona Project 2
--
----------------------------------------------------------------------------------

local widget = require( "widget" )
local storyboard = require( "storyboard" )

local scene = storyboard.newScene()

local _H = display.contentHeight
local _W = display.contentWidth
local navbar

----------------------------------------------------------------------------------
-- 
--	NOTE:
--	
--	Code outside of listener functions (below) will only be executed once,
--	unless storyboard.removeScene() is called.
-- 
---------------------------------------------------------------------------------

---------------------------------------------------------------------------------
-- BEGINNING OF YOUR IMPLEMENTATION
---------------------------------------------------------------------------------

local function segmentedControlListener( event )
	local targetName = event.target.segmentLabel
	local currentScene = storyboard.getCurrentSceneName()
	
	if targetName == 'Main' then
		navbar:removeSelf();navbar=nil;
		storyboard.gotoScene('menu')
	elseif (targetName == 'Products') and (currentScene ~= 'catMenu') then
		print('products pressed')
		navbar:removeSelf();navbar=nil;
		storyboard.gotoScene('catMenu')
	elseif (targetName == 'About') and (currentScene ~= 'about') then
		navbar:removeSelf();navbar=nil;
		storyboard.gotoScene('about')
	elseif (targetName == 'Contact') and (currentScene ~= 'contact') then
		navbar:removeSelf();navbar=nil;
		storyboard.gotoScene('contact')
	end 
end

-- Called when the scene's view does not exist:
function scene:createScene( event )
	local group = self.view

	-----------------------------------------------------------------------------
		
	--	CREATE display objects and add them to 'group' here.
	--	Example use-case: Restore 'group' from previously saved state.
	
	--background = display.newImageRect ( "sceneBG.png", 320,480)
	background = display.newRect(0,0,_W,_H)
	--background.x = display.contentWidth/2
	--background.y = display.contentHeight/2
	group:insert(background)

	local logo = display.newRoundedRect((_W*.5)-((_W-10)*.5), 100, _W-10, 140,5)
	logo.strokeWidth = 3
	--myRectangle:setFillColor(140, 140, 140)
	logo:setStrokeColor(0,0,0)--255, 255, 255)
	group:insert(logo)

	message = display.newText( "About Us", _W/2-40, 150,nil, 40 )
	--message.x = display.contentWidth/2
	--message.y = 50--display.contentHeight/2
	group:insert(message)

   

	local scrollView = widget.newScrollView
	{
		left = 0,
		top = 0,
		width = display.contentWidth,
		height = display.contentHeight,
		bottomPadding = 50,
		id = "onBottom",
		horizontalScrollDisabled = true,
		verticalScrollDisabled = false,
		listener = scrollListener,
	}

	--Create a text object for the scrollViews title
	local titleText = display.newText("Contact Us", 0, 0, native.systemFontBold, 16)
	titleText:setTextColor(0, 0, 0)
	titleText.x = display.contentCenterX
	titleText.y = 48
	scrollView:insert( titleText )

	--Create a large text string
	local lotsOfText = "Insert Contact Details Here "

	--Create a text object containing the large text string and insert it into the scrollView
	local lotsOfTextObject = display.newText( lotsOfText, 0, 0, 300, 0, "Helvetica", 14)
	lotsOfTextObject:setTextColor( 0 ) 
	lotsOfTextObject:setReferencePoint( display.TopCenterReferencePoint )
	lotsOfTextObject.x = display.contentCenterX
	lotsOfTextObject.y = titleText.y + titleText.contentHeight + 10
	scrollView:insert( lotsOfTextObject )

	group:insert(scrollView)


	-----------------------------------------------------------------------------
navbar = widget.newSegmentedControl
	{
	    left = 0,
	    top = 0,
	    --width = _W/4,
	    segmentWidth = _W/4,
	    segments = { "Main", "Products", "About", "Contact" },
	    defaultSegment = 4,
	    onPress = segmentedControlListener,
	}


	group:insert( navbar )	
end


-- Called immediately after scene has moved onscreen:
function scene:enterScene( event )
	local group = self.view
	storyboard.removeAll()
	
	-----------------------------------------------------------------------------
		
	--	INSERT code here (e.g. start timers, load audio, start listeners, etc.)
	message:setTextColor( 255,0,0 )

	
	
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