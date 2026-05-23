Lets learn how to make some Custom Presets!

What are they Used For?
 Presets are used to tie together items. and give them a
 Percentage Chance at spawning inside of (Ex: Cargo = Vehicles / Clotthing / zombies / etc.) You can make as many presets as you want, and they can be used in multiple places. For example, you could make a preset for "Food" and then use that preset in both Vehicles and Zombies.

 (Cargo is defined as { anything that holds inventory room like a shirt or vehicle })


// Here is a Blank Snippet of a cfgrandomPreset.xml // 

<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<randompresets>
        <cargo chance="1.00" name="foodVillage">
				<item name="Classname" chance="0.34" />
				<item name="Classname" chance="0.34" />
		</cargo>
    </randompresets>

      >>>YES THIS IS A VALID RANDOM PRESET, BUT ALWAYS DOUBLE CHECK AND "" VALIDATE "" YOUR WORK!!<<<

// Lets Seperate these Lines//


This is an Xml Beginning Line. THIS MUST ALWAYS BE AT THE TOP OOF ANY XML!!

           <?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
-----------------------------------------------------------------------------
Starting Tag & End Tag 

Start: This must be underneath the NEEDED xml Start Snippet, like shown above.
     <randompresets>
------------------------------
End: This one is the end tag, Can YOU see the difference?? the difference is the " / "
    </randompresets>
--------------------------------------------------------------------------------------
             <cargo chance="1.00" name="foodVillage">



This is the Chance Rating that ANYTHING WITHIN the preset will spawn
------------------------------------------------------------------------


				<item name="Classname" chance="0.34" />
				<item name="Classname" chance="0.34" />

These are the items + the Chance rating of of THAT ITEM Spawning.
 IF Multiple items are include in the Preset lines { if only 1 item, Set the Chance rating to 1.00 }
 
 EX:  				<item name="Classname" chance="1.00" />

------------------------------------------------------------------------------------

</cargo>
This is the closing tag, Tells the file you are done with this "block" of code. 

----------------------------------------------------------------------------------------

How to add more?
Easy!, simply Paste the classname of the item you'd like to use OVER Classname. 
lower chance ratings to the correct percentage.

How to know if you have the right percentage?
  BY TRIAL AN ERROR !!!! 
  
 Depending on what the item is going to,
 Zombies dont have much storage, you can NOT place a log. inside of a zombies inventory. 

 it is on you the Creator of the custom work to figure that out. 

 you can always check out the Normal file inside of your missions directory to see how its done for further explantion. Good Luck!


---------------------------------------------------------------------------------------

How to add to Spawnabletype.xml ??

Easy Check out how they do it Regulary!

But heres my quick definition..
This the Regualr Snippet Block for the Canvas pants,

	<type name="CanvasPantsMidi_Beige">
		<cargo preset="mixVillage" />
	</type>

  once you have made your own preset Block and (added to the regular or within a custom folder)
  Grab the Name From " <cargo chance="1.00" name="foodVillage"> " 

  you would simply add the preset name like so.

  	<type name="CanvasPantsMidi_Beige">
		<cargo preset="mixVillage" />
		<cargo preset="foodVillage" />
	  </type>

Then you can paste over the existing Snippet Block, an add in to other Items.

Be Sure There is NO DUPLICATES within the files. if the canvas pants are already there.. you will need to PASTE OVER the EXISTING snippet block.

-------------------------------------------------------------------------

to learn more you can simply look up youtube videos, or Join Partnered Discords For Any Help!
 --------------------------

 What purpose would we need to do it this way instead of adding each item name?
 Well in short.... this is the Lazy Way. But It also Give the Game more Room To Breathe And a Direct path on 
 Where it could Possibly Go. { If its not Pulled from another source. }

Other Reason.
Presets in this way are not used much. there for FREE ROOM!!! lol

