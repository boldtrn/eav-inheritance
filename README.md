What is this?
===============

This is a test project I created for a proof of concept.

The basic issue is that we use an EAV database design. However, we have several entities that need to use the attribute-value structure.
I tried to solve it using single table inheritance. It seems to be quite nice right now.

You can load testdata using: doctrine:fixtures:load
You can view a list per Project here: http://127.0.0.1:8000/app/view/<ProjectId>
