<?php
if (isset($_REQUEST["submit"])) {
    $data = array(
        'problemNo' => '',
        'caller' => '',
        'software' => '',
        'hardware' => '',
        'time' => '',
        'reason' => '',
        'notes' => '',
        'solution' => ''
    );
} else {
if ($_REQUEST['problemNo'] == '325') {
    $data = array(
        'problemNo' => '325',
        'caller' => 'George Formby from Cleaning Dept., ext 23456',
        'software' => 'Windows 8',
        'hardware' => 'HP Laptop',
        'time' => 'Oct 3 2016, 9.00am',
        'reason' => 'Laptop running very slowly',
        'notes' => 'Initial suggestion to re-boot. 
Oct 3, 9.30am – caller phoned back to say rebooting didn’t work. Clara 
assigned to problem. 
Oct 5, 4.00pm – Clara called to say Windows CleanUp used to tidy up 
disc space and delete unused temporary files. User 
can access Windows more easily and speedily.',
        'solution' => ''
    );

} elseif ($_REQUEST['problemNo'] == '326') {
    $data = array(
        'problemNo' => '326',
        'caller' => 'Hillary C. from Legal Dept., ext 22999',
        'software' => 'Windows 10, Outlook 365',
        'hardware' => 'Asus Laptop',
        'time' => 'Oct 3 2016, 9.15am',
        'reason' => 'Email may have been hacked when using an external server',
        'notes' => 'Passed straight to Clara.
Oct 4, 9.00pm – Clara called. Anti-virus software checks carried out, 
etc. Computer appears to be uninfected, but can’t tell 
if any data has been stolen. User given an extensive 
lecture on the dangers of using the wrong email 
server.',
        'solution' => ''
    );
}  elseif ($_REQUEST['problemNo'] == '327') {
    $data = array(
        'problemNo' => '327',
        'caller' => 'Ed Balls from Publicity, ext 28200',
        'software' => 'All media software',
        'hardware' => 'CD Rom Reader on Sony Vaio VPCX13C7E Desktop,No. CNU327BHP7',
        'time' => 'Oct 4 2016, 9.20am',
        'reason' => 'Tendency to eject CDs early',
        'notes' => 'Passed to Bert 
Oct 5, 4.00pm – Bert called to add that though the user said the CD 
was not strictly necessary he was concerned it could 
lead him on a right “song and dance” if he was ejected 
too soon. Therefore new CD reader ordered. 
Oct 15, 10.05am – Bert called to say new CD reader now installed. As 
it was a new series CD reader, the problem will not 
occur again.',
        'solution' => ''
    );

} elseif ($_REQUEST['problemNo']=='328') {
    $data = array(
        'problemNo' => '328',
        'caller' => 'D.Trump from CEO’s office, ext 20171',
        'software' => 'Network Firewall',
        'hardware' => '-',
        'time' => 'Oct 4 2016, 4.15am',
        'reason' => 'Concerned about the strength of the firewall. In particular wants to keep out illegal messages from Mexico.',
        'notes' => 'Passed straight to Clara. 
Oct 5, 9.00am – Clara called. Passed to Nick as it was a network 
problem. 
Oct 6, 10.15am – Nick called. Stronger firewall researched and costed 
and passed to Mr. Trump. Costs are high so probably 
will never be implemented.',
        'solution' => ''
    );
}}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Query</title>
</head>

<body>
<div class="header">
    <h1>Make-It-All</h1>
    <h2>Make a Query</h2>
</div>

<div class="form">
        <table class="enter_query_table">
            <tr>
                <td><label for="problemNo">Problem Number:</label></td>
                <td><input name="problemNo" type="text" class="larger" id="problemNo"
                           value="<?php echo $data['problemNo'] ?>"
                           size="12"/></td>
            </tr>
            <tr>
                <td><label for="callerName">Caller Name:</label></td>
                <td><input name="callerName" type="text" class="larger" id="callerName"
                           value="<?php echo $data['caller'] ?>"
                           size="12"/></td>
            </tr>
            <tr>
                <td><label for="time">Time:</label></td>
                <td><input name="time" type="text" class="larger" id="time" value="<?php echo $data['time'] ?>"
                           size="12"/></td>
            </tr>
            <tr>
                <td><label for="Software">Software:</label></td>
                <td><input name="OS" type="text" class="larger" id="Software" value="<?php echo $data['software'] ?>"
                           size="12"/></td>
            </tr>
            <tr>
                <td><label for="Hardware">Hardware:</label></td>
                <td><input name="problemType" type="text" class="larger" id="Hardware"
                           value="<?php echo $data['hardware'] ?>"
                           size="12"/></td>
            </tr>
            <tr>
                <td><label for="reason">Reason:</label></td>
                <td><input name="reason" type="text" class="larger" id="reason" value="<?php echo $data['reason'] ?>"
                           size="12"/>
                </td>
            </tr>

            <tr>
                <td><label for="notes">Notes:</label></td>
                <td><textarea name="notes" rows="4" cols="50" class="larger"><?php echo $data['notes'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td><label for="Solved">Solved:</label></td>
                <td>
                    <select name="solved">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="notes">Solution:</label></td>
                <td><textarea name="solution" rows="4" cols="50" class="larger"><?php echo $data['solution'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="submit" value="Submit" onclick="alert('Query Submitted');window.history.go(-1)"/></td>
            </tr>
        </table>
</div>
</body>

</html>