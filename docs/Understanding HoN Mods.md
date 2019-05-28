# Understanding HoN Mods

## Background on HoN

[Heroes of Newerth (HoN)](https://www.heroesofnewerth.com/) is a video game created by S2 games and eventually sold to Frostburn Studios. As of [patch 4.7.3](https://forums.heroesofnewerth.com/showthread.php?611162-4-7-3-Reverts-amp-Mass-Long-term-Stability-Balance), announced 02-16-2019, the game has been places in a "maintenance mode" where it will not have any more active development and will only receive scarce patches to fix game breaking issues. No new content is expected at this time.

Fortunately, since the beginning, HoN has always allowed [modding](https://en.wikipedia.org/wiki/Modding) of the game client. A list of existing mods and other resources can be found on the [forums](https://forums.heroesofnewerth.com/forumdisplay.php?290-Bots-and-Modifications).

## Understand the HoN UI and how to mod it

Essentially modding the HoN client allows users to add/remove/modify visual elements in the game to make for a better experience. For instance, there is the [Rune And Stack Timer mod](https://github.com/mrhappyasthma/HoN-RuneAndStackTimer) which alerts the user automatically when the game clock is approach time for a rune spawn or a creep stack.

So how exactly does modding work in HoN? Well, quite simply, it's done by editing the actual files used to display the HoN UI.

HoN uses files in the [XAML](https://en.wikipedia.org/wiki/Extensible_Application_Markup_Language) format (which is basically just a text file) to describe how it wants the interface to look. The HoN game engine then parses these files and translates the textual description of the layout into the actual visual elements shown on screen.

For example, let's say you wanted to add a new button. You can do so by editing the existing file to add new XAML for your button. It might look something like this (it's okay if you don't understand the syntax yet, this is just fictional example).

```xaml
<button color="#FFFFFF" x=50 y=50>
</button>
```

The files that describe the HoN UI can be found in the `Heroes of Newerth\game` directory, e.g. `C:\Program Files (x86)\Heroes of Newerth\game`.

If you go into that folder you should see some files with the `.s2z` file extension. This is a made-up file extension that is just an uncompressed `.zip` archive.

For example:

```
resources0.s2z
resources1.s2z
resources3.s2z
textures.s2z
```

If you want, you could copy any of these files and rename the copy from `.s2z` to `.zip` and then  extract the files from the archive and you can actually view all of the HoN resource files.

