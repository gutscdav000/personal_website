
# this script was built for the purpose of importing an updated site from github

echo "removing outdated files."
rm ../index.html
rm ../about.html
rm ../articles.html
rm ../contactMe.html
rm ../projects.html

rm -rf ../2018
rm -rf ../../assets/
echo "files removed . . ."


echo "copying new files"
cp bootStrappedSite/index.html ../
cp bootStrappedSite/about.html ../
cp bootStrappedSite/articles.html ../
cp bootStrappedSite/contactMe.html ../
cp bootStrappedSite/projects.html ../

cp -R bootStrappedSite/assets ../
cp -R bootStrappedSite/2018 ../
echo "done copying"
