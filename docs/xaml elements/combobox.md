# Combobox

## Attributes

| Name                |  Type      |  Description                                                 |  Examples                     |
|---------------------|------------|--------------------------------------------------------------|-------------------------------|
|  name               |  String    |  Name of element                                             |  addfriend_button             |
|  group              |  String    |  Name of group                                               |  chat_channel_window          |
|  x                  |  Distance  |  X position (horizontal plane)                               |  1.5h, -5h, 25, 0             |
|  y                  |  Distance  |  Y position (vertical plane)                                 |  1.5h, -5h, 25, 0             |
|  width              |  Distance  |  Width of element                                            |  1.5h, -5h, 250, 75%          |
|  height             |  Distance  |  Height of element                                           |  1.5h, -5h, 250, 75%          |
|  align              |  Enum      |  Horizontal alignment                                        |  right, left, center          |
|  valign             |  Enum      |  Vertical alignment                                          |  top, bottom, center          |
|  color              |  Color     |  Background color                                            |  invisible, #FFFFFF           |
|  itemwidth          |  Distance  |  Width of item                                               |  40, 70, 100%                 |
|  itemheight         |  Distance  |  Height of item                                              |  2.3h, 24                     |
|  maxlistheight      |  Integer   |  Maximum height of list                                      |  4, 8, 20                     |
|  exteriorscrollbars |  Boolean   |  Exterior scroll bars shown                                  |  true, false, 1, 0            |
|  scrolltexture      |  File path |  File path of scroll texture                                 |  /ui/elements/vist_scroll.tga |
|  handleheight       |  Distance  |  Height of handle. (Handle is the blob inside the scrollbar) |  2.0h, 24, 100%               |
|  handlewidth        |  Distance  |  Width of handle. (Handle is the blob inside the scrollbar)  |  12, 2h, 100%                 |
|  scrollbarsize      |  Distance  |  Size of scroll bar                                          |  2h, 2.0h                     |
|  scrollbaroffset    |  Distance  |  Offset of scroll bar                                        |  0, -17                       |
|  highlight          |  Enum      |  Where to highlight                                          |  under                        |
|  scrolltexture      |  File path |  File path of scroll texture                                 |  /ui/elements/vist_scroll.tga |
|  form               |  String    |                                                              |  CreateAccount                |
|  data               |  String    |                                                              |  first_name, email            |
|  visible            |  Boolean   |  Visibility status                                           |  true, false, 1, 0            |
|  watch              |  Trigger   |  Trigger to watch                                            |  ChatUserEvent                |
|  enabled            |  Boolean   |  True for enabled, false for disabled                        |  true, false, 1, 0            |