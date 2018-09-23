
# this shell script is for the purpose of returning the files to the git repo

echo "removing repo files. . . "
rm bootStrappedSite/index.html
rm bootStrappedSite/about.html
rm bootStrappedSite/articles.html
rm bootStrappedSite/contactMe.html
rm bootStrappedSite/projects.html

rm -rf bootStrappedSite/assets
echo "files removed"

echo "copying files . . ."
cp ../index.html bootStrappedSite/
cp ../about.html bootStrappedSite/
cp ../articles.html bootStrappedSite/
cp ../contactMe.html bootStrappedSite/
cp ../projects.html bootStrappedSite/

cp -R ../assets bootStrappedSite/
echo "done copying"
