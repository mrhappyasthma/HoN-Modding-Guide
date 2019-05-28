# Label

## Attributes

| Name          |  Type      |  Description                   |  Examples                      |
|---------------|------------|--------------------------------|--------------------------------|
|  name         |  String    |  Name of element               |  addfriend_button              |
|  group        |  String    |  Name of group                 |  chat_channel_window           |
|  x            |  Distance  |  X position (horizontal plane) |  1.5h, -5h, 25, 0              |
|  y            |  Distance  |  Y position (vertical plane)   |  1.5h, -5h, 25, 0              |
|  width        |  Distance  |  Width of element              |  1.5h, -5h, 250, 75%           |
|  height       |  Distance  |  Height of element             |  1.5h, -5h, 250, 75%           |
|  align        |  Enum      |  Horizontal alignment          |  right, left, center           |
|  valign       |  Enum      |  Vertical alignment            |  top, bottom, center           |
|  textalign    |  Enum      |  Horizontal alignment of text  |  right, left, center           |
|  textvalign   |  Enum      |  Vertical alignment of text    |  top, bottom, center           |
|  fitx         |  Boolean   |                                |  true, false, 1, 0             |
|  fitxpadding  |  Distance  |                                |  0.5h, 1.5h                    |
|  fitxmax      |  Distance  |                                |  24h                           |
|  fity         |  Boolean   |                                |  true, false, 1, 0             |
|  fitypadding  |  Distance  |                                |  0.6h, 1.2h, 0.16h             |
|  color        |  Color     |  Background color              |  invisible, #FFFFFF            |
|  font         |  Enum      |  Font type and size            |  dyn_10, dyn_12, dyn_9         |
|  shadow       |  Boolean   |  Display shadow                |  true, false, 1, 0             |
|  shadowcolor  |  Color     |  Color of shadow               |  black, #FFFFFF                |
|  shadowoffset |  Distance  |  Shadow offset distance        |  1, 5, 3h                      |
|  wrap         |  Boolean   |  Wrap text                     |  true, false, 1, 0             |
|  noclick      |  Boolean   |  Prevent from throwing onclick |  true, false, 1, 0             |
|  content      |  String    |  Sets the content of a label.  |  game_menu_currentleavepercent |
|  watch        |  Trigger   |  Trigger to watch              |  ChatUserEvent                 |