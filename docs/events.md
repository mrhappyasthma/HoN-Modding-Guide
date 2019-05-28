# Events

This list of events is likely incomplete.

| Name          | Description                                                  | Note                                                         |
| ------------- | ------------------------------------------------------------ | ------------------------------------------------------------ |
| onclick       | Called when something is left clicked down, then up.         | Not sure if this adjusts for reassigned mouse binds.         |
| onrightclick  | Called when something is right clicked down, then up.        | Not sure if this adjusts for reassigned mouse binds.         |
| onhotkey      | Called when hotkey is pressed. Can only have 1 hotkey.       |                                                              |
| ontrigger     | Called when watch attribute is triggered.                    | There can be multiple ontriggers; use watch0 with ontrigger0,  watch1 with ontrigger1, and so on, up until watch9 with ontrigger9. |
| onfocus       |                                                              |                                                              |
| onlosefocus   |                                                              |                                                              |
| onchange      |                                                              |                                                              |
| onenter       | Called when the object is moused over for buttons and when the input cursor appears for textboxes. | Only works for <textbox> and <button>.                       |
| onmouseout    | Called when cursor leaves the area the object cover.         |                                                              |
| onmouseover   | Called when cursor is over the object.                       |                                                              |
| onmouseldown  | Called when object is clicked by left mouse button (mouse down). |                                                              |
| onmouselup    | Called when object is clicked by left mouse button (mouse up). |                                                              |
| onmouserdown  | Called when object is clicked by right mouse button (mouse down). |                                                              |
| onmouserup    | Called when object is clicked by right mouse button (mouse up). |                                                              |
| onload        | Called when the object is loaded/initialized.                | Unable to use Trigger() from onload,                         |
| onframe       | Occurs once per frame/sec (fps), only occurs when the object is visible |                                                              |
| onevent{id}   | Called with CallEvent('{objectname}', {id}).  Use CallEvent('{objectname}') to trigger onevent. |                                                              |
| onenddrag     |                                                              |                                                              |
| ondoubleclick |                                                              |                                                              |
| onesc         |                                                              |                                                              |
| onhide        |                                                              |                                                              |
| onselect      |                                                              |                                                              |
| onshow        | Called when an object is set visible or drawn for the first time since the last page reload. |                                                              |
| onwake        | Called when an widget is woken from the SleepWidget command or forced awake. |                                                              |
| oninstantiate | Called when this template instance is created.               | Only works for <template>s                                   |
| onreload      |                                                              | Probably only work on <interface>s                           |
| onaddplayer   |                                                              |                                                              |
| onentergame   | When entering game, before pick screen                       |                                                              |

## Notes

- To add more attribute-event couples of the same kind in the same 
  element add a number at the end of them (Example: `hotkey0="K" 
  onhotkey0="do something" hotkey1="L" onhotkey1="do something else"`)