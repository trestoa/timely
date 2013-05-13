About timely
=============

timely is a lightweight webbased calender made with PHP and MySql on serverside and 
Javascript + jQuery as frontend. 

# Try it
My version of timely is up at [timely.mklein.co.at](http://timely.mklein.co.at/).

# Self Hosting
Of cource you can also host timelsy yourself. Unfortuntly I have not had the time to write an web installer yet, but it is not that diffifult to install timely.

## Requirements
* MySql database
* Apache HTTP server(or some other HTTP server with PHP)

## Clone or download the Repository
If you haven´t done already, download the timely Repository by just typing:

	$ git clone https://github.com/kleiinnn/timely.git

If recommand you to use git as version controlling system, but if you want, you can also download timely as [tarball](https://github.com/kleiinnn/timely/tarball/master) or as [zip archive](https://github.com/kleiinnn/timely/zipballball/master).

## Installing
The fastest and easiest way to install timely is to use the web installer in the /install folder. Just open your webbrowser and step throu the wizard. If you want to install timely manually, follow the guide in this chapter.

### Database
timely needs only 3 MYSQL datatables, so it is very lightweight and easy to maintain.
The scripts for the creation of these 3 tables are stored in /install/sql. Execute each script using this command:
		
	$ mysql < <SQL_FILE.sql>
		
### Configuration
After the setup of MYSQL we need the store some information.

First we need to copy the configuration files from the /install folder into the final /config folder. Type this from project folder:

	$ cp -r ./install/config ./config

Now fill in the 2 config files with your favourite editor.

### Finishing Installation
We are almost done! The installation itself is already done, but we have to delete the /install directory or make it unreadable. Making it unreadable means to change the mode of the directory to 600 that the apache server isn´t able to access the directory anymore.

For making it unreadable type:
		
	$ chmod -R 600 ./install 

For deleting the hole /install folder:
		
	$ rm -r ./install
		
If you don´t delete the /install folder, everyone will be able to edit your config.

## Updating
For updating timely from a previous version visit the CHANGES.md. 

## License
timely is licensed under the GNU General Public License(GPL). Look into LICENSE for more information.
		

 