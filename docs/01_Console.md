# HoN Console

HoN includes a built-in console that can be entered at any time using `ctrl + f8` (`cmd + f8` on Mac). You can exit the console by issuing the same command again.

While in the console, users can issue commands to instruct the game engine to perform certain tasks.

To view a list of all the possible commands, see [Current console command list](#current-console-command-list)

## Console Syntax

### Basic Commands

Commands may be issued one at a time or separated by semicolons.

```
echo 1; echo 2
```

This will print `1` and `2`.

### Comments

Comments aren't particularly useful unless part of a larger script, but they can be used for scripts.

Comments use the typical C++ syntax of putting `//` in front of a line you want to act as a comment. This will make sure the line is not parsed. This is typically used to document your script to help human readers better understand what's happening, or to disable certain lines of code.

### Math Operations

To do number calculations you need to put `[` `]` brackets around the numbers that are to be calculated.

Example:

```
echo [1 + 1]
```

Will return: `2`.

Variables can also be used in calculations too.

Example:

```
set _i 5
echo [_i + 10]
```

Will return: `15`.

Some operators that can be used:

- `%` - Modulus, determines the remainder left over after a division.

  ```bash
  echo [4 % 3]
  ```

  Will print `1`. (`3` goes into `4` evenly 1 time, with `1` left over).

- `rand` - Return a random number between 0 and 1.

  ```bash
  echo [rand]
  ```

  Will print a random number, e.g. `0.5`.

### Console Evaluator Syntax

The console evaluator syntax indicates to the parser that it needs to pre-evaluate arguments before passing them to a command. (It's not needed within the math syntax of brackets `[` `]`)

The syntax commonly requires surrounding the text to be evaluated with `#` symbols.

For example, the the `echo` command will print out the evaluation of its argument.

```bash
echo 5
```

Will print `5` to the console.

You can also print out the value of variables or calculations from functions:

```bash
# The following stores the value 5 in the variable `_x`.
set _x 5

# This line will literally print out the string "_x".
echo _x

# This line uses console evaluator syntax and will print the value of _x
# which holds 5. Therefore it prints 5 to the console.
echo #_x#
```

If your command requires multiple evaluations, you can nest evaluators by using `|#` for the nested evaluation.

For the following example, we use the `Ceil()` function which rounds a floating point number up to the nearest integer.

```bash
# The following stores the value 5.5 in the variable `_x`.
set _x 5.5

# The following line will evaluate #_x# to 5.5, but does not evaluate the
# function call to Ceil(). So it will literally print out the string
# "Ceil(5.5)" to the console.
echo Ceil(#_x#)

# By using the correct nested evaluator syntax, the following will
# correctly evaluate |#_x|# to 5.5 and will then evaluate #Ceil(5.5)#
# to 6.
echo #Ceil(|#_x|#)#
```

There is no way to nest a 3rd time, so if you need to evaluate something that would require too much nesting, you should first store some of the intermediate results in a variable. Then use this new variable in a command that has at most 2 sets of nested console evaluators.

## Viewing the console logs as a text file

HoN saves the console logs to a `console.log` text file, which can be found at the following paths:

| Windows XP      | C:\Documents and Settings\[user]\My Documents\Heroes of Newerth\game\console.log |
| --------------- | ------------------------------------------------------------ |
| Windows Vista/7 | `C:\Users\[user]\My Documents\Heroes of Newerth\game\`console.log |
| Linux           | `~/.Heroes\ of\ Newerth/game/`console.log                    |
| Mac             | `/Users/[user]/Library/Application Support/Heroes of Newerth/game/`console.log |

You can force the logs to flush by issuing the following command to the console: `FlushLogs`.

## Current console command list

The following is the list of commands, as of `5/27/2019`. There are currently `496` commands.

| Commands                         | Notes                                                        |
| :------------------------------- | :----------------------------------------------------------- |
| Abort                            |                                                              |
| Action                           |                                                              |
| ActionList                       |                                                              |
| AdminPause                       |                                                              |
| AdminUnpause                     |                                                              |
| Alias                            |                                                              |
| AliasList                        |                                                              |
| AllChat                          |                                                              |
| AnalyzeMemory                    |                                                              |
| AssignFirstBanTeam               |                                                              |
| AxisList                         |                                                              |
| BanHero                          |                                                              |
| Beep                             |                                                              |
| BenchmarkLocalDedicatedReplay    |                                                              |
| BenchmarkReplay                  |                                                              |
| BinaryScriptFile                 |                                                              |
| Bind                             |                                                              |
| BindAxis                         |                                                              |
| BindButton                       |                                                              |
| BindImpulse                      |                                                              |
| BindImpulseEx                    |                                                              |
| BindList                         |                                                              |
| BitmaskGenerate                  |                                                              |
| BitmaskRewriteLoadedFiles        |                                                              |
| BitmaskUpdateFiles               |                                                              |
| BotList                          |                                                              |
| Break                            |                                                              |
| BreakClientCookie                |                                                              |
| ButtonList                       |                                                              |
| BuyBack                          |                                                              |
| Call                             |                                                              |
| CallVote                         |                                                              |
| CancelLogin                      |                                                              |
| ChangePassword                   |                                                              |
| ChatConnect                      |                                                              |
| ChatDisconnect                   |                                                              |
| ChatOpenMessage                  |                                                              |
| ChatPushNotification             |                                                              |
| ChatRefreshUpgrades              |                                                              |
| CheckForUpdates                  |                                                              |
| CheckReconnect                   |                                                              |
| Clear                            |                                                              |
| ClearEndGameStats                |                                                              |
| ClearMatchInfo                   |                                                              |
| ClearOneShotSounds               |                                                              |
| ClearTrackedResources            |                                                              |
| ClearUpgrade                     |                                                              |
| ClientGetEnrollCloudConfig       |                                                              |
| ClientPostCloudConfig            |                                                              |
| ClientRefreshInfos               |                                                              |
| ClientRefreshUpgrades            |                                                              |
| ClientRetrieveCloudConfig        |                                                              |
| ClientSetEnrollCloudConfig       |                                                              |
| ClientSpawnUnit                  |                                                              |
| ClientStatusCloudConfig          |                                                              |
| CmdList                          | Print the list of all available console commands.            |
| CompatVersion                    |                                                              |
| Connect                          |                                                              |
| ConsoleElementList               |                                                              |
| ConsoleHistoryAppend             |                                                              |
| Crash                            |                                                              |
| CrashBigMemory                   |                                                              |
| CrashMemory                      |                                                              |
| CrashSTL                         |                                                              |
| CreateThumbs                     |                                                              |
| CreateTMMGroup                   |                                                              |
| CreateVar                        |                                                              |
| CURLErrorTest                    |                                                              |
| CvarInfo                         |                                                              |
| CvarList                         |                                                              |
| CycleSharedControl               |                                                              |
| D3DTextureSlotStats              |                                                              |
| DebugReplayDump                  |                                                              |
| DefaultGameBind                  |                                                              |
| DefaultGameBinds                 |                                                              |
| DelayHeroLoading                 |                                                              |
| DeleteCallback                   |                                                              |
| DemoteRef                        |                                                              |
| DeselectUnit                     |                                                              |
| Disaassemble                     |                                                              |
| DisableInterface                 |                                                              |
| DisableLogging                   |                                                              |
| DisableQuests                    |                                                              |
| Disconnect                       |                                                              |
| DisplayAllTextChars              |                                                              |
| Do                               |                                                              |
| DownloadCompat                   |                                                              |
| DownloadReplayCompat             |                                                              |
| DraftHero                        |                                                              |
| Echo                             | Takes 1 argument to print out to the console. Particularly useful for printing out the value of variables or calculations. |
| Else                             |                                                              |
| EnableInterface                  |                                                              |
| EnableLogging                    |                                                              |
| EntityList                       |                                                              |
| eval                             |                                                              |
| EventCmdList                     |                                                              |
| Exec                             |                                                              |
| ExecuteToolHeroEditor            |                                                              |
| ExpandComponent                  |                                                              |
| ExportLuaByteCode                |                                                              |
| FilterGameList                   |                                                              |
| FlushLogs                        | Flushes the in-game console logs to the `console.log` file.  |
| ForceSetLocalServerTimeOffset    |                                                              |
| ForceUpdate                      |                                                              |
| ForceVideoDriverReload           |                                                              |
| ForEachDir                       |                                                              |
| ForEachFile                      |                                                              |
| FunctionList                     |                                                              |
| GameBind                         |                                                              |
| GameMessage                      |                                                              |
| GameReBind                       |                                                              |
| GenerateEntityStringTable        |                                                              |
| GenerateUpdate                   |                                                              |
| GetCampaignSeasonRewards         |                                                              |
| GetCloudSave                     |                                                              |
| GetGameList                      |                                                              |
| GetGamePhaseExt                  |                                                              |
| GetGameTime                      |                                                              |
| GetLocalGameList                 |                                                              |
| GetLocalServerList               |                                                              |
| GetMasteryHeroInfo               |                                                              |
| GetMatchInfo                     |                                                              |
| GetMilliseconds                  |                                                              |
| GetOngoingGameList               |                                                              |
| GetPlayerStatsName               |                                                              |
| GetRecentMatches                 |                                                              |
| GetSeconds                       |                                                              |
| GetServerCount                   |                                                              |
| GetServerList                    |                                                              |
| GetTargetIndex                   |                                                              |
| GetTotalTime                     |                                                              |
| GetUnixTimestamp                 |                                                              |
| Goto                             |                                                              |
| GroupChangeType                  |                                                              |
| GroupChat                        |                                                              |
| HeroesList                       |                                                              |
| HiddenBanHero                    |                                                              |
| HideModalDialog                  |                                                              |
| HideWidget                       |                                                              |
| Hitch                            |                                                              |
| If                               |                                                              |
| Inc                              |                                                              |
| InfiniteLoop                     |                                                              |
| InviteToTMMGroup                 |                                                              |
| ItemPlace                        |                                                              |
| ItemPlaceEntity                  |                                                              |
| ItemPlaceHero                    |                                                              |
| ItemPlaceSelected                |                                                              |
| ItemPlaceStash                   |                                                              |
| JoinTMMGroup                     |                                                              |
| JoinTMMQueue                     |                                                              |
| KickFromTMMGroup                 |                                                              |
| KillHover                        |                                                              |
| KillSelected                     |                                                              |
| KillServer                       |                                                              |
| LeaveTMMGroup                    |                                                              |
| LeaveTMMQueue                    |                                                              |
| LevelUpAbility                   |                                                              |
| ListBotMetaDataLayers            |                                                              |
| ListCoreFilesModified            |                                                              |
| ListInterfaces                   |                                                              |
| ListModdedFiles                  |                                                              |
| ListMods                         |                                                              |
| ListNetworkResources             |                                                              |
| ListResourceGraph                |                                                              |
| ListResources                    |                                                              |
| ListResourceUsage                |                                                              |
| ListVidDisplays                  |                                                              |
| ListVidModes                     |                                                              |
| ListWidgets                      |                                                              |
| ListWidgetsInActiveInterface     |                                                              |
| LoadChildInterface               |                                                              |
| LoadEntityDefinition             |                                                              |
| LoadEntityDefinitionsFromFolder  |                                                              |
| LoadGameMechanics                |                                                              |
| LoadInterface                    |                                                              |
| LoadSounds                       |                                                              |
| LocalChat                        |                                                              |
| LockHero                         |                                                              |
| Login                            |                                                              |
| Logout                           |                                                              |
| LuaFunctions                     |                                                              |
| MakeThisAZipPlease               |                                                              |
| ManagerChat                      |                                                              |
| ManagerInstanceRcon              |                                                              |
| ManagerShutdownInstances         |                                                              |
| ManagerStartInstance             |                                                              |
| ManagerStartReset                |                                                              |
| ManagerStartShutdown             |                                                              |
| ManagerStatus                    |                                                              |
| ManagerUploadStatus              |                                                              |
| MemStats                         |                                                              |
| MentorChat                       |                                                              |
| MessageSocketTestClient          |                                                              |
| MessageSocketTestServer          |                                                              |
| MinimapLeftClick                 |                                                              |
| MinimapPing                      |                                                              |
| MusicInfo                        |                                                              |
| MusicSeek                        |                                                              |
| MVPVote                          |                                                              |
| NetStatsDraw                     |                                                              |
| NetStatsStart                    |                                                              |
| NextClient                       |                                                              |
| NextReplayClient                 |                                                              |
| OverrideRecommendedItems         |                                                              |
| PlayClientGameSound              |                                                              |
| PlayClientGameSoundLooping       |                                                              |
| PlayerCount                      |                                                              |
| PlaylistClear                    |                                                              |
| PlaylistInfo                     |                                                              |
| PlaylistNext                     |                                                              |
| PlaylistShuffleAndFromFirstStart |                                                              |
| PlaylistStart                    |                                                              |
| PlayMusic                        |                                                              |
| PlaySound                        |                                                              |
| PlayWorldSFXSound                |                                                              |
| PostWatchBulletComment           |                                                              |
| PotentialHero                    |                                                              |
| PrecacheAll                      |                                                              |
| PreloadWorld                     |                                                              |
| PrevClient                       |                                                              |
| PrevReplayClient                 |                                                              |
| PrimaryAction                    |                                                              |
| PrimaryActionStash               |                                                              |
| PrintAllSoundUsage               |                                                              |
| PrintAvailableUpgrades           |                                                              |
| PrintChatProtocol                |                                                              |
| PrintClientSocketStats           |                                                              |
| PrintClipSize                    |                                                              |
| PrintClipUsage                   |                                                              |
| PrintCompatInfo                  |                                                              |
| PrintFoliageSize                 |                                                              |
| PrintLoadTimes                   |                                                              |
| PrintLuaMemoryUsage              |                                                              |
| PrintMeshSize                    |                                                              |
| PrintModelUsage                  |                                                              |
| PrintNumWidgets                  |                                                              |
| PrintNumWidgetsPerType           |                                                              |
| PrintShaderDefine                |                                                              |
| PrintSoundUsage                  |                                                              |
| PrintStaticPools                 |                                                              |
| PrintSystemInfo                  |                                                              |
| PrintTerrainSize                 |                                                              |
| PrintTextureUsage                |                                                              |
| PrintTrackedResources            |                                                              |
| PrintTriggerWatchers             |                                                              |
| PrintUITextureUsage              |                                                              |
| PrintWebResourceDownloads        |                                                              |
| PrintWidgetMemoryUsage           |                                                              |
| ProceduralList                   |                                                              |
| ProfileBegin                     |                                                              |
| ProfileDisplay                   |                                                              |
| ProfileDraw                      |                                                              |
| ProfileEval                      |                                                              |
| ProfileNode                      |                                                              |
| ProfilePause                     |                                                              |
| ProfilePrint                     |                                                              |
| ProfilePrintAverage              |                                                              |
| ProfilePrintG                    |                                                              |
| ProfilePrintMax                  |                                                              |
| ProfileResetAverage              |                                                              |
| ProfileResetMax                  |                                                              |
| PromoteRef                       |                                                              |
| Purchase                         |                                                              |
| Purchase2                        |                                                              |
| PurchaseAllComponents            |                                                              |
| PurchaseByName                   |                                                              |
| PurchaseComponent                |                                                              |
| PurchaseRecipe                   |                                                              |
| PurchaseRemainingComponents      |                                                              |
| PurchaseUsedIn                   |                                                              |
| PushMod                          |                                                              |
| Quit                             |                                                              |
| RandomHero                       |                                                              |
| RayTrace                         |                                                              |
| Ready                            |                                                              |
| RebuildFoliage                   |                                                              |
| RebuildTerrain                   |                                                              |
| RebuildWater                     |                                                              |
| ReceiveMasteryReward             |                                                              |
| Reconnect                        |                                                              |
| RegenerateConnectionID           |                                                              |
| RegisterEntityDefinitions        |                                                              |
| RegisterRes                      |                                                              |
| RegisterSmiley                   |                                                              |
| RejectServerInvite               |                                                              |
| RejectTMMInvite                  |                                                              |
| ReloadFontMaps                   |                                                              |
| ReloadInterface                  |                                                              |
| ReloadInterfaces                 |                                                              |
| ReloadMaterials                  |                                                              |
| ReloadModels                     |                                                              |
| ReloadRes                        |                                                              |
| ReloadSamples                    |                                                              |
| ReloadSelected                   |                                                              |
| ReloadShaders                    |                                                              |
| ReloadTextures                   |                                                              |
| Remote                           |                                                              |
| Repeat                           |                                                              |
| RepickHero                       |                                                              |
| ReplayAddSegment                 |                                                              |
| ReplayIncFrame                   |                                                              |
| ReplayIncPlaybackSpeed           |                                                              |
| ReplayRestart                    |                                                              |
| ReplaySetFrame                   |                                                              |
| ReplaySetPaused                  |                                                              |
| ReplaySetPlaybackSpeed           |                                                              |
| RequestAssignHost                |                                                              |
| RequestAssignSpectator           |                                                              |
| RequestBalanceTeams              |                                                              |
| RequestChannelList               |                                                              |
| RequestChannelSublist            |                                                              |
| RequestGameInfo                  |                                                              |
| RequestKick                      |                                                              |
| RequestLockSlot                  |                                                              |
| RequestMatchCancel               |                                                              |
| RequestMatchStart                |                                                              |
| RequestServerStatus              |                                                              |
| RequestSwapPlayerSlots           |                                                              |
| RequestTMMPopularityUpdate       |                                                              |
| RequestToggleDynamicAvatarLock   |                                                              |
| RequestToggleSlotLock            |                                                              |
| RequestUnlockSlot                |                                                              |
| RequestUserStatus                |                                                              |
| Reset                            |                                                              |
| ResetQuest                       |                                                              |
| ResizeAllInterfaces              |                                                              |
| ResizeInterface                  |                                                              |
| ResourceCmd                      |                                                              |
| ResourceCmdEx                    |                                                              |
| Restart                          |                                                              |
| RestartAndRepair                 |                                                              |
| RestartAndUpdate                 |                                                              |
| SceneStatsDraw                   |                                                              |
| SceneStatsStart                  |                                                              |
| Screenshot                       |                                                              |
| Script                           |                                                              |
| ScriptCallback                   |                                                              |
| ScriptFile                       |                                                              |
| ScriptManagerPrintStackSize      |                                                              |
| SearchProductListByID            |                                                              |
| SearchProductListByName          |                                                              |
| SecondaryAction                  |                                                              |
| SecondaryActionStash             |                                                              |
| SelectAvatar                     |                                                              |
| SelectControlAvatar              |                                                              |
| SelectDisplay                    |                                                              |
| SelectUnitAvatar                 |                                                              |
| SelectUpgrade                    |                                                              |
| Sell                             |                                                              |
| SendCreateGameRequest            |                                                              |
| SendRebornFeedback               |                                                              |
| SendScriptMessage                |                                                              |
| SendServerInviteID               |                                                              |
| SendServerInviteName             |                                                              |
| SendTMMGroupOptionsUpdate        |                                                              |
| SendTMMPlayerLoadingUpdate       |                                                              |
| SendTMMPlayerReadyStatus         |                                                              |
| ServerChatFromClient             |                                                              |
| ServerRefreshUpgrades            |                                                              |
| Set                              |                                                              |
| SetActiveClient                  |                                                              |
| SetActiveRecipe                  |                                                              |
| SetActiveShop                    |                                                              |
| SetAutoLevelup                   |                                                              |
| SetClientAngles                  |                                                              |
| SetClientOpName                  |                                                              |
| SetCloudSave                     |                                                              |
| SetConfig                        |                                                              |
| SetControlUnit                   |                                                              |
| SetEnemyBot                      |                                                              |
| SetExclusiveModifierSlot         |                                                              |
| SetGameInterface                 |                                                              |
| SetMainInterface                 |                                                              |
| SetNoHelp                        |                                                              |
| SetReplayClient                  |                                                              |
| SetSave                          |                                                              |
| SetServerPrivateValue            |                                                              |
| SetServerRecvBuffer              |                                                              |
| SetServerSendBuffer              |                                                              |
| SetServerVIPValue                |                                                              |
| SetShopFilter                    |                                                              |
| SetShopItemRange                 |                                                              |
| SetShopSearch                    |                                                              |
| SetTeamBot                       |                                                              |
| SetVideoMode                     |                                                              |
| ShaderCacheClear                 |                                                              |
| ShaderDefine                     |                                                              |
| ShaderSamplerList                |                                                              |
| ShaderUndefine                   |                                                              |
| ShaderVarList                    |                                                              |
| ShareFullControl                 |                                                              |
| SharePartialControl              |                                                              |
| ShowCCPanel                      |                                                              |
| ShowCCStatistics                 |                                                              |
| ShowHeroCompendiumInfo           |                                                              |
| ShowInterface                    |                                                              |
| ShowPostGameStats                |                                                              |
| ShowWidget                       |                                                              |
| ShufflePickHero                  |                                                              |
| SizeHint                         |                                                              |
| Sleep                            |                                                              |
| SoundTest                        |                                                              |
| SpamGameList                     |                                                              |
| SpawnHero                        |                                                              |
| SpawnLockedHero                  |                                                              |
| SSModels                         |                                                              |
| StartClient                      |                                                              |
| StartClientGameEffect            |                                                              |
| StartCmdClickPos                 |                                                              |
| StartDedicatedReplay             |                                                              |
| StartGame                        |                                                              |
| StartLocalDedicatedReplay        |                                                              |
| StartLocalGame                   |                                                              |
| StartReplay                      |                                                              |
| StartServer                      |                                                              |
| StartWeather                     |                                                              |
| StopClient                       |                                                              |
| StopClientGameEffect             |                                                              |
| StopClientGameSound              |                                                              |
| StopMusic                        |                                                              |
| StopReplay                       |                                                              |
| StopServer                       |                                                              |
| StopSound                        |                                                              |
| StopStreamingImmediately         |                                                              |
| StopWeather                      |                                                              |
| StoreScript                      |                                                              |
| StrCmp                           |                                                              |
| StreamPlayLatest                 |                                                              |
| SubmitMatchComment               |                                                              |
| SwapHeroRequest                  |                                                              |
| SystemError                      |                                                              |
| SystemMemoryInfo                 |                                                              |
| TakeHighResScreenShot            |                                                              |
| Team                             |                                                              |
| TeamChat                         |                                                              |
| TestAltAnnouncement              |                                                              |
| TestCompressFile                 |                                                              |
| TestFirstKill                    |                                                              |
| TestHashes                       |                                                              |
| TestMicBoost                     |                                                              |
| TestMicVolume                    |                                                              |
| TestOperationData                |                                                              |
| TestUnzipFile                    |                                                              |
| TestUnzipFile2                   |                                                              |
| TestUnzipFile3                   |                                                              |
| TextureCacheClear                |                                                              |
| TextureLoadTime                  |                                                              |
| TextureMem                       |                                                              |
| Time                             |                                                              |
| Toggle                           |                                                              |
| ToggleNoHelp                     |                                                              |
| TrackResources                   |                                                              |
| Trigger                          |                                                              |
| TriggerRemainingComponents       |                                                              |
| TriggerTest                      |                                                              |
| ui_showStrParamHelperMem         |                                                              |
| UICall                           |                                                              |
| UICmdList                        |                                                              |
| UITriggerList                    |                                                              |
| Unalias                          |                                                              |
| UnaliasAll                       |                                                              |
| Unbind                           |                                                              |
| UnbindAll                        |                                                              |
| UnbindTable                      |                                                              |
| UnloadChildInterface             |                                                              |
| UnloadInterface                  |                                                              |
| Unpause                          |                                                              |
| UnshareFullControl               |                                                              |
| UnsharePartialControl            |                                                              |
| UpdateHeroCompendium             |                                                              |
| UpdateInterface                  |                                                              |
| UpdateMinimapTexture             |                                                              |
| UpdateQuests                     |                                                              |
| UpdateRapStatus                  |                                                              |
| UploadUpdate                     |                                                              |
| UpTime                           |                                                              |
| UseMasteryBoost                  |                                                              |
| ValidateResources0               |                                                              |
| Version                          |                                                              |
| VidReset                         |                                                              |
| VoipPlay                         |                                                              |
| VoipPlayEnd                      |                                                              |
| VoipPlayPause                    |                                                              |
| VoipRecEnd                       |                                                              |
| VoipRecSetQuality                |                                                              |
| VoipRecStart                     |                                                              |
| Vote                             |                                                              |
| VoteBanHero                      |                                                              |
| WidgetTreeStart                  |                                                              |
| WriteCloudConfigScript           |                                                              |
| WriteConfigScript                |                                                              |
| WriteGameInfoLog                 |                                                              |
| WriteTextureArchive              |                                                              |
| YieldScript                      |                                                              |
| YieldScriptFile                  |                                                              |