<?php
/**
 * Define constants
 *
 * @package Handywriter
 */

namespace Handywriter\Constants;

const MENU_SLUG            = 'handywriter';
const ICON_BASE64          = 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2IiB2aWV3Qm94PSIwIDAgMjU2IDI1NiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxkZXNjPkNyZWF0ZWQgd2l0aCBGYWJyaWMuanMgMS43LjIyPC9kZXNjPgo8ZGVmcz4KPC9kZWZzPgo8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMjggMTI4KSBzY2FsZSgwLjcyIDAuNzIpIiBzdHlsZT0iIj4KCTxnIHN0eWxlPSJzdHJva2U6IG5vbmU7IHN0cm9rZS13aWR0aDogMDsgc3Ryb2tlLWRhc2hhcnJheTogbm9uZTsgc3Ryb2tlLWxpbmVjYXA6IGJ1dHQ7IHN0cm9rZS1saW5lam9pbjogbWl0ZXI7IHN0cm9rZS1taXRlcmxpbWl0OiAxMDsgZmlsbDogbm9uZTsgZmlsbC1ydWxlOiBub256ZXJvOyBvcGFjaXR5OiAxOyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE3NS4wNSAtMTc1LjA1MDAwMDAwMDAwMDA0KSBzY2FsZSgzLjg5IDMuODkpIiA+Cgk8cGF0aCBkPSJNIDYzLjE4IDkwLjAxNSBjIC04Ljg3MiAwIC0xOS44OTIgLTMuMDU0IC0yOC40NzIgLTguMjM1IGMgLTAuODk5IC0wLjU0NCAtMS40NDkgLTEuNTE4IC0xLjQ0OSAtMi41NjggdiAtNS4zMzUgYyAwIC0xLjY1NyAxLjM0MyAtMyAzIC0zIHMgMyAxLjM0MyAzIDMgdiAzLjYwNSBjIDEwLjYwNyA1Ljg4MyAyMy41NiA3LjYzNyAyOS44OTMgNS44MiBjIDEuNjAyIC0wLjQ1OSAyLjcyOCAtMS4xMzQgMy4wOTIgLTEuODUyIGMgMC4wNzEgLTAuMTQgMC4xNTMgLTAuMjc0IDAuMjQ1IC0wLjQwMiBjIDAuNTkxIC0wLjgxNiAwLjQ1OCAtMi40NDIgLTAuMzk1IC00LjgzMyBjIC0wLjAxNiAtMC4wNDIgLTAuMDI5IC0wLjA4NCAtMC4wNDIgLTAuMTI2IGMgLTAuMTk5IC0wLjY0NiAtMC4zOTkgLTEuODk0IDAuNDQ3IC0zLjA1OSBjIC0xLjUwNiAtMC44NzIgLTMuMDUzIC0xLjc0MyAtNC4wNyAtMi4yNTMgYyAtMS4yMTcgLTAuNjA5IC0xLjg3MSAtMS45NjEgLTEuNTk1IC0zLjI5MyBjIDAuMjc3IC0xLjMzMiAxLjQxNiAtMi4zMTIgMi43NzQgLTIuMzg1IGMgMC4zNDEgLTAuMDE5IDAuNzg2IC0wLjAzNCAxLjI5NiAtMC4wNTEgYyAwLjcxNyAtMC4wMjMgMi4zMDcgLTAuMDc1IDMuNjY1IC0wLjE5OCBjIC0wLjYxMSAtMS40NyAtMC45NzggLTMuMDc5IC0wLjE1NSAtNC41NzggYyAwLjU5NSAtMS4wODQgMS42ODcgLTEuNzg2IDIuOTk2IC0xLjkyNiBjIDAuNjc1IC0wLjA5MSAxLjQzNyAtMC40MjIgMS45NzggLTAuNzQ0IGMgLTAuNDI1IC0wLjUwOCAtMC45ODQgLTEuMTI3IC0xLjQ0NCAtMS42MzUgYyAtMi44NDggLTMuMTQ4IC02Ljc0OCAtNy40NjEgLTYuODUgLTEyLjQxOSBjIC0wLjE0OCAtMTEuMjggLTEuNzQ0IC0xOC42ODEgLTUuMzM0IC0yNC43NSBDIDYwLjgzIDExLjE5MSA1MS44MzEgNi41NDIgNDEuMzEyIDYuMDQ0IHYgMTEuNTU1IGggNS4xMTkgYyAxLjY1NyAwIDMgMS4zNDMgMyAzIHMgLTEuMzQzIDMgLTMgMyBoIC04LjExOSBjIC0xLjY1NyAwIC0zIC0xLjM0MyAtMyAtMyBWIDMuMDE0IGMgMCAtMS42MjcgMS4yOTcgLTIuOTU4IDIuOTI0IC0yLjk5OSBDIDUyLjEzNCAtMC4zNCA2NC4zMTUgNS40ODcgNzAuODMyIDE1LjU5NCBjIDAuMDIgMC4wMzEgMC4wMzkgMC4wNjIgMC4wNTggMC4wOTMgYyA0LjE4NiA3LjA0NSA2LjA0IDE1LjM0OCA2LjIwMyAyNy43NjEgYyAwLjA1NiAyLjY5NSAzLjIxMiA2LjE4NiA1LjMwMSA4LjQ5NSBjIDEuODQ4IDIuMDQzIDMuMDY4IDMuMzkyIDMuMzk1IDQuOTg1IGMgMC4yNjIgMS4xNjcgLTAuMDIxIDIuNDYxIC0wLjgwNiAzLjU4OSBjIC0wLjk2MiAxLjM4MSAtMi42NTQgMi40NjIgLTQuMzYgMy4xMjMgYyAwLjAyNyAwLjA1NCAwLjA1MiAwLjEwNCAwLjA3NSAwLjE1MSBjIDAuMjQ1IDAuNDkzIDAuNDc4IDAuOTU5IDAuNjUgMS40IGMgMC4wMjEgMC4wNTcgMC4wNDIgMC4xMTQgMC4wNjIgMC4xNzMgYyAwLjM0OSAxLjA4MyAwLjE3NSAyLjIzNCAtMC40NzcgMy4xNjEgYyAtMC40MzkgMC42MjUgLTEuMDI3IDEuMDkgLTEuODE3IDEuNDM4IGMgMC4xMSAwLjA2NiAwLjIxOCAwLjEzIDAuMzIgMC4xOTEgYyAwLjk1NyAwLjU3NCAxLjUxNyAxLjYzMiAxLjQ1MiAyLjc0NiBjIC0wLjExIDEuOTA5IC0xLjM4MSAyLjkyNyAtMi40NzEgMy40ODMgYyAwLjYyMSAyLjQ4NCAwLjgwMiA1LjQzNCAtMC45MzMgNy45ODcgYyAtMS4xOTUgMi4xODggLTMuNDQxIDMuNzY4IC02LjY3OSA0LjY5NiBDIDY4LjU3NSA4OS43MDkgNjUuOTg0IDkwLjAxNSA2My4xOCA5MC4wMTUgeiBNIDc4LjE5MiA2NC4yOTQgYyAtMC4wMjEgMC4wMDQgLTAuMDQ0IDAuMDA3IC0wLjA2NiAwLjAxIEMgNzguMTQ3IDY0LjMwMiA3OC4xNyA2NC4yOTggNzguMTkyIDY0LjI5NCB6IE0gODAuMDAyIDU4LjQyOSBMIDgwLjAwMiA1OC40MjkgTCA4MC4wMDIgNTguNDI5IHoiIHN0eWxlPSJzdHJva2U6IG5vbmU7IHN0cm9rZS13aWR0aDogMTsgc3Ryb2tlLWRhc2hhcnJheTogbm9uZTsgc3Ryb2tlLWxpbmVjYXA6IGJ1dHQ7IHN0cm9rZS1saW5lam9pbjogbWl0ZXI7IHN0cm9rZS1taXRlcmxpbWl0OiAxMDsgZmlsbDogcmdiKDAsMCwwKTsgZmlsbC1ydWxlOiBub256ZXJvOyBvcGFjaXR5OiAxOyIgdHJhbnNmb3JtPSIgbWF0cml4KDEgMCAwIDEgMCAwKSAiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgLz4KCTxwYXRoIGQ9Ik0gNDQuMDc0IDM0LjcwMiBIIDIyLjg1OSBjIC0xLjY1NyAwIC0zIC0xLjM0MyAtMyAtMyBWIDE4Ljk2NCBjIDAgLTEuNjU3IDEuMzQzIC0zIDMgLTMgcyAzIDEuMzQzIDMgMyB2IDkuNzM3IGggMTguMjE0IGMgMS42NTcgMCAzIDEuMzQzIDMgMyBTIDQ1LjczIDM0LjcwMiA0NC4wNzQgMzQuNzAyIHoiIHN0eWxlPSJzdHJva2U6IG5vbmU7IHN0cm9rZS13aWR0aDogMTsgc3Ryb2tlLWRhc2hhcnJheTogbm9uZTsgc3Ryb2tlLWxpbmVjYXA6IGJ1dHQ7IHN0cm9rZS1saW5lam9pbjogbWl0ZXI7IHN0cm9rZS1taXRlcmxpbWl0OiAxMDsgZmlsbDogcmdiKDAsMCwwKTsgZmlsbC1ydWxlOiBub256ZXJvOyBvcGFjaXR5OiAxOyIgdHJhbnNmb3JtPSIgbWF0cml4KDEgMCAwIDEgMCAwKSAiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgLz4KCTxwYXRoIGQ9Ik0gMTkuNDY2IDY1LjMzNSBjIC0xLjY1NyAwIC0zIC0xLjM0MyAtMyAtMyB2IC03LjQyNiBjIDAgLTEuNjU3IDEuMzQzIC0zIDMgLTMgaCAyNS4zNDEgYyAxLjY1NyAwIDMgMS4zNDMgMyAzIHMgLTEuMzQ0IDMgLTMgMyBIIDIyLjQ2NiB2IDQuNDI2IEMgMjIuNDY2IDYzLjk5MiAyMS4xMjMgNjUuMzM1IDE5LjQ2NiA2NS4zMzUgeiIgc3R5bGU9InN0cm9rZTogbm9uZTsgc3Ryb2tlLXdpZHRoOiAxOyBzdHJva2UtZGFzaGFycmF5OiBub25lOyBzdHJva2UtbGluZWNhcDogYnV0dDsgc3Ryb2tlLWxpbmVqb2luOiBtaXRlcjsgc3Ryb2tlLW1pdGVybGltaXQ6IDEwOyBmaWxsOiByZ2IoMCwwLDApOyBmaWxsLXJ1bGU6IG5vbnplcm87IG9wYWNpdHk6IDE7IiB0cmFuc2Zvcm09IiBtYXRyaXgoMSAwIDAgMSAwIDApICIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiAvPgoJPHBhdGggZD0iTSA0OS41ODIgNDYuNzU3IEggMTYuMTM1IGMgLTEuNjU3IDAgLTMgLTEuMzQzIC0zIC0zIHMgMS4zNDMgLTMgMyAtMyBoIDMzLjQ0NyBjIDEuNjU3IDAgMyAxLjM0MyAzIDMgUyA1MS4yMzkgNDYuNzU3IDQ5LjU4MiA0Ni43NTcgeiIgc3R5bGU9InN0cm9rZTogbm9uZTsgc3Ryb2tlLXdpZHRoOiAxOyBzdHJva2UtZGFzaGFycmF5OiBub25lOyBzdHJva2UtbGluZWNhcDogYnV0dDsgc3Ryb2tlLWxpbmVqb2luOiBtaXRlcjsgc3Ryb2tlLW1pdGVybGltaXQ6IDEwOyBmaWxsOiByZ2IoMCwwLDApOyBmaWxsLXJ1bGU6IG5vbnplcm87IG9wYWNpdHk6IDE7IiB0cmFuc2Zvcm09IiBtYXRyaXgoMSAwIDAgMSAwIDApICIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiAvPgoJPHBhdGggZD0iTSA2My4yNTYgNDYuNzU3IGggLTMuNTA3IGMgLTEuNjU3IDAgLTMgLTEuMzQzIC0zIC0zIHMgMS4zNDMgLTMgMyAtMyBoIDMuNTA3IGMgMS42NTcgMCAzIDEuMzQzIDMgMyBTIDY0LjkxMyA0Ni43NTcgNjMuMjU2IDQ2Ljc1NyB6IiBzdHlsZT0ic3Ryb2tlOiBub25lOyBzdHJva2Utd2lkdGg6IDE7IHN0cm9rZS1kYXNoYXJyYXk6IG5vbmU7IHN0cm9rZS1saW5lY2FwOiBidXR0OyBzdHJva2UtbGluZWpvaW46IG1pdGVyOyBzdHJva2UtbWl0ZXJsaW1pdDogMTA7IGZpbGw6IHJnYigwLDAsMCk7IGZpbGwtcnVsZTogbm9uemVybzsgb3BhY2l0eTogMTsiIHRyYW5zZm9ybT0iIG1hdHJpeCgxIDAgMCAxIDAgMCkgIiBzdHJva2UtbGluZWNhcD0icm91bmQiIC8+Cgk8cGF0aCBkPSJNIDIyLjg1OSAyMC45NTcgYyAtMy41ODQgMCAtNi41IC0yLjkxNiAtNi41IC02LjUgYyAwIC0zLjU4NCAyLjkxNiAtNi41IDYuNSAtNi41IHMgNi41IDIuOTE2IDYuNSA2LjUgQyAyOS4zNTkgMTguMDQxIDI2LjQ0NCAyMC45NTcgMjIuODU5IDIwLjk1NyB6IiBzdHlsZT0ic3Ryb2tlOiBub25lOyBzdHJva2Utd2lkdGg6IDE7IHN0cm9rZS1kYXNoYXJyYXk6IG5vbmU7IHN0cm9rZS1saW5lY2FwOiBidXR0OyBzdHJva2UtbGluZWpvaW46IG1pdGVyOyBzdHJva2UtbWl0ZXJsaW1pdDogMTA7IGZpbGw6IHJnYigwLDAsMCk7IGZpbGwtcnVsZTogbm9uemVybzsgb3BhY2l0eTogMTsiIHRyYW5zZm9ybT0iIG1hdHJpeCgxIDAgMCAxIDAgMCkgIiBzdHJva2UtbGluZWNhcD0icm91bmQiIC8+Cgk8cGF0aCBkPSJNIDUxLjMzMyAyNi43MDcgYyAtMy41ODQgMCAtNi41IC0yLjkxNiAtNi41IC02LjUgYyAwIC0zLjU4NCAyLjkxNiAtNi41IDYuNSAtNi41IHMgNi41IDIuOTE2IDYuNSA2LjUgQyA1Ny44MzMgMjMuNzkxIDU0LjkxNyAyNi43MDcgNTEuMzMzIDI2LjcwNyB6IiBzdHlsZT0ic3Ryb2tlOiBub25lOyBzdHJva2Utd2lkdGg6IDE7IHN0cm9rZS1kYXNoYXJyYXk6IG5vbmU7IHN0cm9rZS1saW5lY2FwOiBidXR0OyBzdHJva2UtbGluZWpvaW46IG1pdGVyOyBzdHJva2UtbWl0ZXJsaW1pdDogMTA7IGZpbGw6IHJnYigwLDAsMCk7IGZpbGwtcnVsZTogbm9uemVybzsgb3BhY2l0eTogMTsiIHRyYW5zZm9ybT0iIG1hdHJpeCgxIDAgMCAxIDAgMCkgIiBzdHJva2UtbGluZWNhcD0icm91bmQiIC8+Cgk8cGF0aCBkPSJNIDExLjYyOCA1MC4yNTcgYyAtMy41ODQgMCAtNi41IC0yLjkxNiAtNi41IC02LjUgYyAwIC0zLjU4NCAyLjkxNiAtNi41IDYuNSAtNi41IHMgNi41IDIuOTE2IDYuNSA2LjUgQyAxOC4xMjggNDcuMzQxIDE1LjIxMiA1MC4yNTcgMTEuNjI4IDUwLjI1NyB6IiBzdHlsZT0ic3Ryb2tlOiBub25lOyBzdHJva2Utd2lkdGg6IDE7IHN0cm9rZS1kYXNoYXJyYXk6IG5vbmU7IHN0cm9rZS1saW5lY2FwOiBidXR0OyBzdHJva2UtbGluZWpvaW46IG1pdGVyOyBzdHJva2UtbWl0ZXJsaW1pdDogMTA7IGZpbGw6IHJnYigwLDAsMCk7IGZpbGwtcnVsZTogbm9uemVybzsgb3BhY2l0eTogMTsiIHRyYW5zZm9ybT0iIG1hdHJpeCgxIDAgMCAxIDAgMCkgIiBzdHJva2UtbGluZWNhcD0icm91bmQiIC8+Cgk8cGF0aCBkPSJNIDE5LjQ2NiA3My4zNDIgYyAtMy41ODQgMCAtNi41IC0yLjkxNiAtNi41IC02LjUwMSBjIDAgLTMuNTg0IDIuOTE2IC02LjUgNi41IC02LjUgYyAzLjU4NCAwIDYuNSAyLjkxNSA2LjUgNi41IEMgMjUuOTY3IDcwLjQyNiAyMy4wNTEgNzMuMzQyIDE5LjQ2NiA3My4zNDIgeiIgc3R5bGU9InN0cm9rZTogbm9uZTsgc3Ryb2tlLXdpZHRoOiAxOyBzdHJva2UtZGFzaGFycmF5OiBub25lOyBzdHJva2UtbGluZWNhcDogYnV0dDsgc3Ryb2tlLWxpbmVqb2luOiBtaXRlcjsgc3Ryb2tlLW1pdGVybGltaXQ6IDEwOyBmaWxsOiByZ2IoMCwwLDApOyBmaWxsLXJ1bGU6IG5vbnplcm87IG9wYWNpdHk6IDE7IiB0cmFuc2Zvcm09IiBtYXRyaXgoMSAwIDAgMSAwIDApICIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiAvPgoJPHBhdGggZD0iTSAzNi4yNTkgNzUuODY5IGMgLTMuNTg0IDAgLTYuNSAtMi45MTYgLTYuNSAtNi41IGMgMCAtMy41ODQgMi45MTYgLTYuNSA2LjUgLTYuNSBzIDYuNSAyLjkxNSA2LjUgNi41IEMgNDIuNzU5IDcyLjk1MiAzOS44NDMgNzUuODY5IDM2LjI1OSA3NS44NjkgeiIgc3R5bGU9InN0cm9rZTogbm9uZTsgc3Ryb2tlLXdpZHRoOiAxOyBzdHJva2UtZGFzaGFycmF5OiBub25lOyBzdHJva2UtbGluZWNhcDogYnV0dDsgc3Ryb2tlLWxpbmVqb2luOiBtaXRlcjsgc3Ryb2tlLW1pdGVybGltaXQ6IDEwOyBmaWxsOiByZ2IoMCwwLDApOyBmaWxsLXJ1bGU6IG5vbnplcm87IG9wYWNpdHk6IDE7IiB0cmFuc2Zvcm09IiBtYXRyaXgoMSAwIDAgMSAwIDApICIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiAvPgo8L2c+CjwvZz4KPC9zdmc+';
const LICENSE_KEY_OPTION   = 'handywriter_license_key';
const SETTING_OPTION       = 'handywriter_settings';
const HANDYWRITER_API_BASE = 'https://handyplugins.co/wp-json/';

// transient keys
const LICENSE_INFO_TRANSIENT = 'handywriter_license_info'; // license info API result
const CREDIT_USAGE_TRANSIENT = 'handywriter_credit_usage'; // Credits usage API result

// post type(s)
const HISTORY_POST_TYPE = 'handywriter-history';

// cron
const HISTORY_CRON_HOOK = 'handywriter_history_scheduled_delete';

// urls
const DOCS_URL    = 'https://handyplugins.co/handywriter/docs/';
const BLOG_URL    = 'https://handyplugins.co/blog/';
const FAQ_URL     = 'https://handyplugins.co/handywriter/#faq';
const SUPPORT_URL = 'https://wordpress.org/support/plugin/handywriter/';
const GITHUB_URL  = 'https://github.com/HandyPlugins';
const TWITTER_URL = 'https://twitter.com/HandyPlugins';
