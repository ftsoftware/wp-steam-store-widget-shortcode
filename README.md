# Steam Widget Shortcodes for WordPress

## Installation
Download the latest package from the releases and unzip the **steam-store-shortcode** folder to your WordPress plugin directory: __/wp-content/plugins/__. You're ready to set off.

****

## Usage  
### Generic Steam Store Widget
A common widget for generic Steam product pages.  
`[steam-store-widget id="<GAME_ID>"]`


**Parameters**:  
* __id__: Product ID from your game, can be found at the end of the store URL (e.g. http://store.steampowered.com/app/234630/ > 234630)
* __width__ (Optional): Widget's width, default: 100%.

**Examples**:  
* `[steam-store-widget id="234630"]`  
* `<center>[steam-store-widget id="234630" width="400"]</center>`

****

### Steam Greenlight Widget  

This widget can be used to promote Steam Greenlight projects.  
`[steam-greenlight-widget id="<GREENLIGHT_ID>"]`


**Parameters**
* __id__: Steam Greenlight ID from your project, can be found at the end of the store URL (e.g. http://steamcommunity.com/sharedfiles/filedetails/?id=515329688 > 515329688)
* __width__ (Optional): Widget's width, default: 100%.
* __height__ (Optional): Widget's height, default: 137px.

**Examples**:  
* `[steam-greenlight-widget id="515329688"]`  
* `<center>[steam-greenlight-widget id="515329688" width="336"]</center>`

****

### License
See LICENSE.txt for more information.