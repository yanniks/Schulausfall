curl --output new-file.html $1
export md5old=`md5sum old-file.html | awk '{ print $1 }'`
export md5new=`md5sum new-file.html | awk '{ print $1 }'`
echo $md5old
echo $md5new
if [ "$md5old" = "$md5new" ]
then
  echo "no change!"
else
  printf "Subject: check $1" | sendmail -f $2 $3
  echo "changed!"
fi
rm -f old-file.html
mv new-file.html old-file.html
unset md5new
unset md5old
