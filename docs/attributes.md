# XAML Attributes

Below is the total set of attributes found on the various XAML elements.

| Name                 | Type               | Description                                                  | Examples                                              |
| -------------------- | ------------------ | ------------------------------------------------------------ | ----------------------------------------------------- |
| align                | Enum               | Horizontal alignment                                         | right, left, center                                   |
| anchorbottom         | Boolean            |                                                              | true, false, 1, 0                                     |
| anim                 | Enum               | Animation state of model                                     | idle, idle2, portrait                                 |
| altrowcolor          |                    |                                                              |                                                       |
| autosort             |                    |                                                              |                                                       |
| blockinput           | Boolean            |                                                              | true, false, 1, 0                                     |
| borderthickness      | Distance           | Thickness of border                                          | 0.6h, 2, 4h                                           |
| cameraangles         | Integer(3)         | Camera angle                                                 | 0 0 180, 0 0 200                                      |
| camerafov            | Integer            | Camera field of view                                         | 45, 60, 19.5, 4.58                                    |
| cameranear           | Integer            |                                                              | 1, -20                                                |
| camerapos            | Integer(3)         | Position of camera                                           | 0 1 0, -5 200 25, 0, 2800, 0                          |
| cangrab              | Boolean            | Allow user to click and drag element                         | true, false, 1, 0                                     |
| carmerafar           | Integer            |                                                              | 5000, 100, 7000                                       |
| clearselection       | Boolean            |                                                              | true, false, 1, 0                                     |
| cols                 |                    |                                                              |                                                       |
| color                | Color              | Background color                                             | invisible, #FFFFFF                                    |
| command              | Boolean            |                                                              | true, false, 1, 0                                     |
| condition            | String             | Condition (Must return true or false and does not end with ;) | true, false, 1, 0, var = 0, StringEquals(var, 'asdf') |
| content              | String             | Sets the content of a label.                                 | game_menu_currentleavepercent                         |
| cull                 | Enum               |                                                              | CULL_BACK, CULL_NONE                                  |
| cvar                 | String             | Cvar to assign to element                                    | cg_displayLevelup                                     |
| data                 | String             |                                                              | first_name, email                                     |
| depthclear           | Boolean            |                                                              | true, false, 1, 0                                     |
| depthcompress        | Boolean            |                                                              | true, false, 1, 0                                     |
| dstblend             | Enum               |                                                              | BLEND_ZERO, BLEND_ONE_MINUS_SRC_ALPHA                 |
| editable             | Boolean            | Allow edits                                                  | true, false, 1, 0                                     |
| effect               | File path          | File path of effect                                          | common/models/refresh/refresh.effect                  |
| enabled              | Boolean            | True for enabled, false for disabled                         | true, false, 1, 0                                     |
| end                  | Degrees            | Degrees to end                                               | -90, -49                                              |
| extendable           |                    |                                                              |                                                       |
| exteriorscrollbars   | Boolean            | Exterior scroll bars shown                                   | true, false, 1, 0                                     |
| fadecolor            | Color              |                                                              | white                                                 |
| fadetime             | Time               | Time until text fades (in milliseconds)                      | 5000, 15000                                           |
| file                 | File path          | File path                                                    | /ui/info/backdrop_b.tga                               |
| fitx                 | Boolean            |                                                              | true, false, 1, 0                                     |
| fitxmax              | Distance           |                                                              | 24h                                                   |
| fitxpadding          | Distance           |                                                              | 0.5h, 1.5h                                            |
| fity                 | Boolean            |                                                              | true, false, 1, 0                                     |
| fitypadding          | Distance           |                                                              | 0.6h, 1.2h, 0.16h                                     |
| float                | Enum               | Instead of subelements being placed on top of one another by default (if their x and y values aren't set), they are set beneath (bottom) or next (right) to one another | bottom, right                                         |
| fog                  | Boolean            | Display fog                                                  | true, false, 1, 0                                     |
| fogcolor             | Color              | Color of fog                                                 | 0 0 0                                                 |
| fogfar               | Distance (integer) |                                                              | 600                                                   |
| fognear              | Distance (integer) |                                                              | 500                                                   |
| fogscale             | Integer            |                                                              | 1                                                     |
| font                 | Enum               | Font type and size                                           | dyn_10, dyn_12, dyn_9                                 |
| form                 | String             |                                                              | CreateAccount                                         |
| group                | String             | Name of group                                                | chat_channel_window                                   |
| grow                 | Boolean            | Allow element to grow                                        | true, false, 1, 0                                     |
| growinvis            | Boolean            | Allow element to grow (even when invis? or even when elements added are invis?) | true, false, 1, 0                                     |
| handlecolor          | Color              | Color of handle. (Handle is the blob inside the scrollbar)   | 1 1 1 1, #CCCCCC                                      |
| handleheight         | Distance           | Height of handle. (Handle is the blob inside the scrollbar)  | 2.0h, 24, 100%                                        |
| handlewidth          | Distance           | Width of handle. (Handle is the blob inside the scrollbar)   | 12, 2h, 100%                                          |
| headingid            |                    |                                                              |                                                       |
| headings             |                    |                                                              |                                                       |
| headingcolor         |                    |                                                              |                                                       |
| height               | Distance           | Height of element                                            | 1.5h, -5h, 250, 75%                                   |
| highlight            | Enum               | Where to highlight                                           | under                                                 |
| highlightbordercolor | Color              | Highlighted selection border color                           | invisible, #FFFFFF                                    |
| highlightcolor       | Color              | Highlighted selection color                                  | invisible, #FFFFFF                                    |
| hotkey               | Enum               | Hotkey to temporarily assign                                 | ESC                                                   |
| hoverselect          | Boolean            |                                                              | true, false, 1, 0                                     |
| interactive          | Boolean            |                                                              | true, false, 1, 0                                     |
| isgamechat           | Boolean            | Is this (textbuffer) widget linked to the in-game chat       | true, false, 1, 0                                     |
| itemheight           | Distance           | Height of item                                               | 2.3h, 24                                              |
| itemoffsetx          | Distance           | Horizontal offset of item                                    | 0                                                     |
| itemoffsety          | Distance           | Vertical offset of item                                      | 0.5h                                                  |
| itemwidth            | Distance           | Width of item                                                | 40, 70, 100%                                          |
| layer                |                    |                                                              | 0                                                     |
| linktochat           | Boolean            | Is this (textbuffer) widget linked to the chat               | true, false, 1, 0                                     |
| listpaddingy         | Distance           | Padding between list elements                                | 1.0h                                                  |
| listwidth            | Distance           | Width of list                                                | 14h                                                   |
| lookat               | Boolean            |                                                              | true, false, 1, 0                                     |
| maxlength            | Integer            | Maximum number of characters                                 | 300, 16, 250                                          |
| maxlines             | Integer            | Maximum number of lines                                      | 1000, 3                                               |
| maxlistheight        | Integer            | Maximum height of list                                       | 4, 8, 20                                              |
| maxvalue             | Integer            | Maximum value                                                | 256, 1, 6000                                          |
| minvalue             | Integer            | Minimum value                                                | 32, 0.5, 100                                          |
| model                | File path          | File path of model                                           | common/models/refresh/refresh.mdf                     |
| modelangles          | Integer(3)         | Angles of model                                              | 0 0 180, 0 0 0                                        |
| modelpos             | Integer(3)         | Position of model                                            | -20 0 0, 20 0 0                                       |
| name                 | String             | Name of element                                              | addfriend_button                                      |
| noclick              | Boolean            | Prevent from throwing onclick                                | true, false, 1, 0                                     |
| nocompress           | Boolean            | Disable texture compression                                  | true, false, 1, 0                                     |
| padding              | Distance           | Amount of padding                                            | 1, 0.4h, 1%                                           |
| passivechildren      | Boolean            | All the children of this element are unclickable (noclick="true") | true, false, 1, 0                                     |
| prefix               | String             | Cvar prefix                                                  | {label}                                               |
| ps                   | Enum               |                                                              | mesh_shadow, simple, effect                           |
| rendermode           | Enum               | Render mode                                                  | grayscale, overlay, additive, normal                  |
| reverse              | Boolean            | Reverse the order depth is given to elements. Useful for comboboxes so their dropdown menu don't goes underneath the element below it. | true, false, 1, 0                                     |
| rotation             | Degrees            | Degrees rotated (0-360)                                      | 0, 180, 25                                            |
| rowheight            |                    |                                                              |                                                       |
| scrollbaroffset      | Distance           | Offset of scroll bar                                         | 0, -17                                                |
| scrollbarplaceholder | Boolean            |                                                              | true, false, 1, 0                                     |
| scrollbarsize        | Distance           | Size of scroll bar                                           | 2h, 2.0h                                              |
| scrolltexture        | File path          | File path of scroll texture                                  | /ui/elements/vist_scroll.tga                          |
| select               | Boolean            |                                                              | true, false, 1, 0                                     |
| shadow               | Boolean            | Display shadow                                               | true, false, 1, 0                                     |
| shadowcolor          | Color              | Color of shadow                                              | black, #FFFFFF                                        |
| shadowoffset         | Distance           | Shadow offset distance                                       | 1, 5, 3h                                              |
| slotcolor            | Color              | Color of slot                                                | 1 1 1 1, #CCCCCCFF                                    |
| slotheight           | Distance           | Height of slot                                               | 8, 0.6h                                               |
| slotwidth            | Distance           | Width of slot                                                | -6, -1                                                |
| snaptogrid           | Boolean            |                                                              | true, false, 1, 0                                     |
| square               | Boolean            |                                                              | true, false, 1, 0                                     |
| srcblend             | Enum               |                                                              | BLEND_ONE, BLEND_SRC_ALPHA                            |
| start                | Degrees            | Degrees to start                                             | 270, 225                                              |
| statename            | Enum               | Name of widget state                                         | up, over, down, disabled                              |
| step                 | Integer            | Value to step                                                | 100                                                   |
| sticky               | Boolean            |                                                              | true, false, 1, 0                                     |
| stickysizing         | Boolean            |                                                              | true, false, 1, 0                                     |
| stickytoinvis        | Boolean            |                                                              | true, false, 1, 0                                     |
| sunaltitude          | Integer            | Altitude of sun                                              | 180, 50, 10                                           |
| sunazimuth           | Integer            |                                                              | -90, 140, 120                                         |
| suncolor             | Color              | Color of sun                                                 | 4 1 1, 1.4 1.3 1, 3.2 2 2                             |
| taborder             | Integer            |                                                              | 5                                                     |
| textalign            | Enum               | Horizontal alignment of text                                 | right, left, center                                   |
| textcolor            | Color              | Color of text                                                | white, black                                          |
| texture              | File path          | Texture/image to use as background                           | /ui/info/header_bar_tl.tga                            |
| textvalign           | Enum               | Vertical alignment of text                                   | top, bottom, center                                   |
| translucent          | Boolean            |                                                              | true, false, 1, 0                                     |
| uscale               | Integer            |                                                              | .14, 2, .3, 9                                         |
| usescrollbar         | Boolean            | Enable use of scrollbar                                      | true, false, 1, 0                                     |
| usescrollbars        | Boolean            |                                                              | true, false, 1, 0                                     |
| usesmileys           | Boolean            | Enable use of smileys                                        | true, false, 1, 0                                     |
| utile                | Boolean            |                                                              | true, false, 1, 0                                     |
| valign               | Enum               | Vertical alignment                                           | top, bottom, center                                   |
| value                | String             | Value associated with listitem                               | MN, 31, 1958                                          |
| visible              | Boolean            | Visibility status                                            | true, false, 1, 0                                     |
| vs                   | Enum               |                                                              | mesh_shadow, simple, effect                           |
| vscale               | Integer            |                                                              | .328, 50p, 9                                          |
| vtile                | Boolean            |                                                              | true, false, 1, 0                                     |
| watch                | Trigger            | Trigger to watch                                             | ChatUserEvent                                         |
| width                | Distance           | Width of element                                             | 1.5h, -5h, 250, 75%                                   |
| wrap                 | Boolean            | Wrap text                                                    | true, false, 1, 0                                     |
| x                    | Distance           | X position (horizontal plane)                                | 1.5h, -5h, 25, 0                                      |
| y                    | Distance           | Y position (vertical plane)                                  | 1.5h, -5h, 25, 0                                      |