
# Rss Changer

It aims to solve the rss problem for websites using Tssue torrent script.

Since this script does not work in harmony with Rutorrent's rss plugin, an intermediate script is needed. You can run the script with an environment that supports php without any other dependencies.



# Usage

For use, you can replace the $prefix variable on line 6 with the target site.

Then replace the domain part of your rss link with the domain of the host you are running. The rest of the rss link will remain the same.

```
https://turktorrent.us/?p=rss&categories=77
```

```
https://yourdomain.com/?p=rss&categories=77
```
