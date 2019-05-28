# Textbuffer

## Description

A `textbuffer` is a widget element used for showing or editing multi-line text elements. If **editable**  is set to `true` then text can be added to it in-game whenever the widget  has focus. The following functions are related to this element (from [UICmdList](uicmdlist.md)): 

- `AddBufferText(string)`: Appends `string` as a text element to the end of the textbuffer. All separate text elements start on new lines. Does not reliably add `string` if it starts with empty lines. 
- `ClearBufferText()`: Clears all the text from the buffer. 
- `SetBufferText(string)`: Clears all the text from the buffer and sets the whole buffer to contain `string`. 
- `TextBufferCmd(string)`: 

Two more methods of adding text to a textbuffer is by setting: 

-  **linktochat** or **isgamechat** to `true`. This will automatically have new chat messages added to the textbuffer.  
-  **file** to point to a text file located in the game's directory. 

### Notes

-  If **fadetime** is set, the individual text elements will be  cleared completely after they have been on the widget for the specified  period of time. 
-  Wrapping of text is determined when the text is added to the  element and can not retro-actively be changed without re-adding it.  Thus, wrapping complicates making this element easy to dynamically resize. 

## Attributes

| Name           |  Type      |  Description                                                 |  Examples                     |
|----------------|------------|--------------------------------------------------------------|-------------------------------|
|  name          |  String    |  Name of element                                             |  addfriend_button             |
|  scrolltexture |  File path |  File path of scroll texture                                 |  /ui/elements/vist_scroll.tga |
|  handleheight  |  Distance  |  Height of handle. (Handle is the blob inside the scrollbar) |  2.0h, 24, 100%               |
|  x             |  Distance  |  X position (horizontal plane)                               |  1.5h, -5h, 25, 0             |
|  y             |  Distance  |  Y position (vertical plane)                                 |  1.5h, -5h, 25, 0             |
|  width         |  Distance  |  Width of element                                            |  1.5h, -5h, 250, 75%          |
|  height        |  Distance  |  Height of element                                           |  1.5h, -5h, 250, 75%          |
|  align         |  Enum      |  Horizontal alignment                                        |  right, left, center          |
|  valign        |  Enum      |  Vertical alignment                                          |  top, bottom, center          |
|  textalign     |  Enum      |  Horizontal alignment of text                                |  right, left, center          |
|  font          |  Enum      |  Font type and size                                          |  dyn_10, dyn_12, dyn_9        |
|  fadecolor     |  Color     |                                                              |  white                        |
|  fadetime      |  Time      |  Time until text fades (in milliseconds)                     |  5000, 15000                  |
|  color         |  Color     |  Background color                                            |  invisible, #FFFFFF           |
|  textcolor     |  Color     |  Color of text                                               |  white, black                 |
|  shadow        |  Boolean   |  Display shadow                                              |  true, false, 1, 0            |
|  shadowcolor   |  Color     |  Color of shadow                                             |  black, #FFFFFF               |
|  shadowoffset  |  Distance  |  Shadow offset distance                                      |  1, 5, 3h                     |
|  wrap          |  Boolean   |  Wrap text                                                   |  true, false, 1, 0            |
|  anchorbottom  |  Boolean   |                                                              |  true, false, 1, 0            |
|  usesmileys    |  Boolean   |  Enable use of smileys                                       |  true, false, 1, 0            |
|  usescrollbar  |  Boolean   |  Enable use of scrollbar                                     |  true, false, 1, 0            |
|  watch         |  Trigger   |  Trigger to watch                                            |  ChatUserEvent                |
|  noclick       |  Boolean   |  Prevent from throwing onclick                               |  true, false, 1, 0            |
|  editable      |  Boolean   |  Allow edits                                                 |  true, false, 1, 0            |
|  maxlines      |  Integer   |  Maximum number of lines                                     |  1000, 3                      |
|  file          |  File path |  File path                                                   |  /ui/info/backdrop_b.tga      |
|  linktochat    |  Boolean   |  Is this (textbuffer) widget linked to the chat              |  true, false, 1, 0            |
|  isgamechat    |  Boolean   |  Is this (textbuffer) widget linked to the in-game chat      |  true, false, 1, 0            |