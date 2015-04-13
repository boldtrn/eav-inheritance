What is this?
===============

This is a test project I created for a proof of concept.

The basic issue is that we use an EAV database design. However, we have several entities that need to use the attribute-value structure.
I tried to solve it using single table inheritance. It seems to be quite nice right now.

You can load testdata using: doctrine:fixtures:load

You can view a list per Project here: http://127.0.0.1:8000/app/view1/<ProjectId> or here http://127.0.0.1:8000/app/view2/<ProjectId>

JSONB
===============

I added the JsonbArrayType in AppBundle\Types. That basically inherits from JsonArrayType and changes json to jsonb.

The ugly part:
Right now I have not found any possibility to implement the @> functionality into Doctrine in a reasonable way (see http://stackoverflow.com/questions/29604397/doctrine-extend-parser).
Therefore, I had to extend the Doctrine parser at Doctrine\ORM\Query\Parser at line 3325:
```
            case '@':
                $this->match(Lexer::T_NONE);
                $this->match(Lexer::T_GREATER_THAN);

                return '@>';
```


Setup Postgres
===============

We will use the jsonb Postgre type to save the Values to.
Be aware that you need to install at least Postgre 9.4. The jsonb will not work with <9.4

To setup Postgre we have to execute the following:

```
apt-get install postgresql postgresql-client postgresql-contrib
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