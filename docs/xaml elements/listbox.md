# Listbox

## Attributes

| Name                  |  Type      |  Description                                                 |  Examples                     |
|-----------------------|------------|--------------------------------------------------------------|-------------------------------|
|  name                 |  String    |  Name of element                                             |  addfriend_button             |
|  x                    |  Distance  |  X position (horizontal plane)                               |  1.5h, -5h, 25, 0             |
|  y                    |  Distance  |  Y position (vertical plane)                                 |  1.5h, -5h, 25, 0             |
|  width                |  Distance  |  Width of element                                            |  1.5h, -5h, 250, 75%          |
|  height               |  Distance  |  Height of element                                           |  1.5h, -5h, 250, 75%          |
|  align                |  Enum      |  Horizontal alignment                                        |  right, left, center          |
|  valign               |  Enum      |  Vertical alignment                                          |  top, bottom, center          |
|  color                |  Color     |  Background color                                            |  invisible, #FFFFFF           |
|  itemwidth            |  Distance  |  Width of item                                               |  40, 70, 100%                 |
|  itemheight           |  Distance  |  Height of item                                              |  2.3h, 24                     |
|  wrap                 |  Boolean   |  Wrap text                                                   |  true, false, 1, 0            |
|  font                 |  Enum      |  Font type and size                                          |  dyn_10, dyn_12, dyn_9        |
|  noclick              |  Boolean   |  Prevent from throwing onclick                               |  true, false, 1, 0            |
|  highlight            |  Enum      |  Where to highlight                                          |  under                        |
|  highlightcolor       |  Color     |  Highlighted selection color                                 |  invisible, #FFFFFF           |
|  highlightbordercolor |  Color     |  Highlighted selection border color                          |  invisible, #FFFFFF           |
|  select               |  Boolean   |                                                              |  true, false, 1, 0            |
|  clearselection       |  Boolean   |                                                              |  true, false, 1, 0            |
|  hoverselect          |  Boolean   |                                                              |  true, false, 1, 0            |
|  maxlistheight        |  Integer   |  Maximum height of list                                      |  4, 8, 20                     |
|  exteriorscrollbars   |  Boolean   |  Exterior scroll bars shown                                  |  true, false, 1, 0            |
|  scrollbarplaceholder |  Boolean   |                                                              |  true, false, 1, 0            |
|  scrollbarsize        |  Distance  |  Size of scroll bar                                          |  2h, 2.0h                     |
|  scrolltexture        |  File path |  File path of scroll texture                                 |  /ui/elements/vist_scroll.tga |
|  scrollbaroffset      |  Distance  |  Offset of scroll bar                                        |  0, -17                       |
|  handleheight         |  Distance  |  Height of handle. (Handle is the blob inside the scrollbar) |  2.0h, 24, 100%               |
|  handlewidth          |  Distance  |  Width of handle. (Handle is the blob inside the scrollbar)  |  12, 2h, 100%                 |
|  usescrollbars        |  Boolean   |                                                              |  true, false, 1, 0            |
|  watch                |  Trigger   |  Trigger to watch                                            |  ChatUserEvent                |