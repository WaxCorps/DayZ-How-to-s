                                       WORK SHEET TEMPLATES
   __________________________________________________________________________________________
            -------------------------------------------------------------------
                                       events.xml

<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<events>
    <event name="classname of Vehicle /  EX: Vehicle_Classname">
        <nominal>0</nominal>
        <min>0</min>
        <max>0</max>
        <lifetime>3888000</lifetime>
        <restock>0</restock>
        <saferadius>500</saferadius>
        <distanceradius>500</distanceradius>
        <cleanupradius>200</cleanupradius>
        <flags deletable="0" init_random="0" remove_damaged="1"/>
        <position>player</position>
        <limit>custom</limit>
        <active>1</active>
        <children>
         <child lootmax="3" lootmin="2" max="1" min="1" type="Classname_Black"/>
         <child lootmax="3" lootmin="2" max="1" min="1" type="Classname_Blue"/>
         <child lootmax="3" lootmin="2" max="1" min="1" type="Classname_Green"/>
         <child lootmax="3" lootmin="2" max="1" min="1" type="Classname_Orange"/>
         <child lootmax="3" lootmin="2" max="1" min="1" type="Classname_Red"/>
         <child lootmax="3" lootmin="2" max="1" min="1" type="Classname_White"/>
        </children>
    </event>
</events>


     ----------------------------------------------------------------------------
                                Spawnabletypes.xml

<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<spawnabletypes>
    <type name="Classname of the VARIANT / EX: Classname_Blue">
		<attachments chance="1.00">
			<item name="classname_door" chance="1.00" />
		</attachments>
		<attachments chance="1.00">
			<item name="classname_codriver_door" chance="1.00" />
		</attachments>
		<attachments chance="1.00">
			<item name="classname_trunk/hood/backdoor" chance="1.00" />
		</attachments>
     <attachments chance="1.00">
			<item name="CarBattery" chance="1.00" />
		</attachments>
		<attachments chance="1.00">
			<item name="SparkPlug" chance="1.00" />
		</attachments>
		<attachments chance="1.00">
			<item name="HeadlightH7" chance="1.00" />
		</attachments>
		<attachments chance="1.00">
			<item name="HeadlightH7" chance="1.00" />
		</attachments>
	</type>



        ------------------------------------------------------------------------------------
                                       eventspawns.xml


<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
 <eventposdef>
    <event name="Vehicle_Classname">
		<pos x="1954.625000" z="11468.542969" a="88.946365"/>
		<pos x="2129.363037" z="12241.110352" a="88.946365"/>
		<pos x="11314.929688" z="7640.910645" a="-148.642426"/>
	</event>
</eventposdef>

