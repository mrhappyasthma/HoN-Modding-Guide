# Image

## Attributes

| Name           |  Type      |  Description                        |  Examples                             |
|----------------|------------|-------------------------------------|---------------------------------------|
|  name          |  String    |  Name of element                    |  addfriend_button                     |
|  x             |  Distance  |  X position (horizontal plane)      |  1.5h, -5h, 25, 0                     |
|  y             |  Distance  |  Y position (vertical plane)        |  1.5h, -5h, 25, 0                     |
|  width         |  Distance  |  Width of element                   |  1.5h, -5h, 250, 75%                  |
|  height        |  Distance  |  Height of element                  |  1.5h, -5h, 250, 75%                  |
|  rotation      |  Degrees   |  Degrees rotated (0-360)            |  0, 180, 25                           |
|  align         |  Enum      |  Horizontal alignment               |  right, left, center                  |
|  valign        |  Enum      |  Vertical alignment                 |  top, bottom, center                  |
|  uscale        |  Integer   |                                     |  .14, 2, .3, 9                        |
|  utile         |  Boolean   |                                     |  true, false, 1, 0                    |
|  vscale        |  Integer   |                                     |  .328, 50p, 9                         |
|  vtile         |  Boolean   |                                     |  true, false, 1, 0                    |
|  color         |  Color     |  Background color                   |  invisible, #FFFFFF                   |
|  texture       |  File path |  Texture/image to use as background |  /ui/info/header_bar_tl.tga           |
|  noclick       |  Boolean   |  Prevent from throwing onclick      |  true, false, 1, 0                    |
|  rendermode    |  Enum      |  Render mode                        |  grayscale, overlay, additive, normal |
|  visible       |  Boolean   |  Visibility status                  |  true, false, 1, 0                    |
|  sticky        |  Boolean   |                                     |  true, false, 1, 0                    |
|  stickytoinvis |  Boolean   |                                     |  true, false, 1, 0                    |
|  watch         |  Trigger   |  Trigger to watch                   |  ChatUserEvent                        |