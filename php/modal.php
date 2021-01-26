<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
		<img oncontextmenu='alert("Image context menu is disabled!");return false;' src="Images/BQOSS_logo.png" style="height:100px;width:100px;	
		padding:0 0 0 40px;display:inline-block;float:left;position:relative;font-family:'Lato', sans-serif;font-size:50px;">
            <h3>Delete Survey<h4 style="text-align: left;">BQOSS</h4></h3>
        </div>
        <div class="modal-body">
            <h2>Are you sure you want to reset the result of the survey??</h2>
        </div>
        <div class="modal-footer">	
			<?php
				$connection  = mysql_connect("localhost", "root","");
				if(!$connection)
				{
					die("Couldn't Connect!".mysql_error());
				}
				mysql_select_db("electionsurvey",$connection);
				if(isset($_POST['reset']))
				{
					$resetQuery = "DELETE FROM `votes` WHERE 1";
					mysql_query($resetQuery,$connection);
					$alterQuery = "ALTER TABLE votes AUTO_INCREMENT=1;";
					mysql_query($alterQuery,$connection);
					$resetSurvey = "DELETE FROM `voted` WHERE 1";
					mysql_query($resetSurvey,$connection);
					$alterSurvey = "ALTER TABLE voted AUTO_INCREMENT=1;";
					mysql_query($alterSurvey,$connection);
				}
			?>
			<form action="result.php" method="post">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" name="reset" class="btn btn-danger" data-toggle="modal" data-target="#reset"><i class="fa fa-trash"></i> Reset Survey</button>
			</form></div></div></div></div>

<div class="modal fade" id="objective" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
			<img oncontextmenu='alert("Image context menu is disabled!");return false;' src="Images/BQOSS_logo.png" style="height:100px;width:100px;	padding:0 0 0 40px;display:inline-block;float:left;position:relative;font-family:'Lato', sans-serif;font-size:50px;">
            <h3>System Objectives<h4 style="text-align: left;">BQOSS</h4></h3>
        </div>
        <div class="modal-body">
            <form action="news.php" method="post">
                <p style="font-family: Lucida Sans">
					<b>1.</b>Automatically generate reports including the top candidates.<br>
					<hr/><b>2.</b>The system will not allow a multiple records as it is in a database system.<br>
					<hr/><b>3.</b>The proposed system will bring ease for the user to know the result of the poll because it automatically sends a confirmation e-mail to the user.<br>
					<hr/><b>4.</b>This will ensure that the file will securely store in the system and make a backup of the files if accident occurs.<br>
				</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </form>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="scope" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
		<img oncontextmenu='alert("Image context menu is disabled!");return false;' src="Images/BQOSS_logo.png" style="height:100px;width:100px;	padding:0 0 0 40px;display:inline-block;float:left;position:relative;font-family:'Lato', sans-serif;font-size:50px;">
            <h3>System Scope<h4 style="text-align: left;">BQOSS</h4></h3></h3>
        </div>
        <div class="modal-body">
            <form action="news.php" method="post">
						<p style="font-family: Lucida Sans">
							<b>1.</b>The proposed system will generate reports that contains information and the result of the survey specified by cities, district and national section gathered from the following registered user and administers the result by the admins.<br>
							<hr/><b>2.</b>The beneficiaries of the said system are for the users also because they will become aware which candidate is the best for the government positions.<br>
							<hr/><b>3.</b>Very efficient data gathering using online survey system.<br>
							<hr/><b>4.</b>It’s easy to find the result of the survey because the system will automatically compute the total of every candidate in a specific position.<br>
						</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </form>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="candid" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
		<img oncontextmenu='alert("Image context menu is disabled!");return false;' src="Images/BQOSS_logo.png" style="height:100px;width:100px;	padding:0 0 0 40px;display:inline-block;float:left;position:relative;font-family:'Lato', sans-serif;font-size:50px;">
            <h3>Your Candidates:<h4 style="text-align: left;">BQOSS</h4></h3></h3>
        </div>
        <div class="modal-body">
            <form action="news.php" method="post">
						<p style="font-family: Lucida Sans">
							<b>1.</b>The proposed system will generate reports that contains information and the result of the survey specified by cities, district and national section gathered from the following registered user and administers the result by the admins.<br>
							<hr/><b>2.</b>The beneficiaries of the said system are for the users also because they will become aware which candidate is the best for the government positions.<br>
							<hr/><b>3.</b>Very efficient data gathering using online survey system.<br>
							<hr/><b>4.</b>It’s easy to find the result of the survey because the system will automatically compute the total of every candidate in a specific position.<br>
						</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-default" onclick="submit();">Submit Survey</button>
            </form>
        </div>
    </div>
  </div>
</div>			
