# Slider

## Attributes

| Name          |  Type      |  Description                                                 |  Examples                   |
|---------------|------------|--------------------------------------------------------------|-----------------------------|
|  name         |  String    |  Name of element                                             |  addfriend_button           |
|  handlecolor  |  Color     |  Color of handle. (Handle is the blob inside the scrollbar)  |  1 1 1 1, #CCCCCC           |
|  handlewidth  |  Distance  |  Width of handle. (Handle is the blob inside the scrollbar)  |  12, 2h, 100%               |
|  handleheight |  Distance  |  Height of handle. (Handle is the blob inside the scrollbar) |  2.0h, 24, 100%             |
|  slotcolor    |  Color     |  Color of slot                                               |  1 1 1 1, #CCCCCCFF         |
|  slotwidth    |  Distance  |  Width of slot                                               |  -6, -1                     |
|  slotheight   |  Distance  |  Height of slot                                              |  8, 0.6h                    |
|  cvar         |  String    |  Cvar to assign to element                                   |  cg_displayLevelup          |
|  minvalue     |  Integer   |  Minimum value                                               |  32, 0.5, 100               |
|  maxvalue     |  Integer   |  Maximum value                                               |  256, 1, 6000               |
|  step         |  Integer   |  Value to step                                               |  100                        |
|  texture      |  File path |  Texture/image to use as background                          |  /ui/info/header_bar_tl.tga |
|  watch        |  Trigger   |  Trigger to watch                                            |  ChatUserEvent              |