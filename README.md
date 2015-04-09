What is this?
===============

This is a test project I created for a proof of concept.

The basic issue is that we use an EAV database design. However, we have several entities that need to use the attribute-value structure.
I tried to solve it using single table inheritance. It seems to be quite nice right now.

You can load testdata using: doctrine:fixtures:load

You can view a list per Project here: http://127.0.0.1:8000/app/view1/<ProjectId> or here http://127.0.0.1:8000/app/view2/<ProjectId>


Setup Postgres
===============

We will use the hstore Postgre type to save the Values to.

To setup Postgre we have to execute the following:

```
apt-get install postgresql postgresql-client 
apt-get install php5-pgsql
adduser mypguser
su - postgres
psql
CREATE USER mypguser WITH PASSWORD 'mypguserpass';
CREATE DATABASE mypgdatabase;
GRANT ALL PRIVILEGES ON DATABASE mypgdatabase to mypguser;
\q
psql 'create extension hstore;'
psql mypgdatabase -c 'create extension hstore;'
psql template1 -c 'create extension hstore;'
```