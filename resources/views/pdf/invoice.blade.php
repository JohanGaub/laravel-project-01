<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    body {
        font-size: 2em;
        line-height: 1.2;
        font-family: "Raleway", CenturyGothic, AppleGothic, sans-serif, Century;
    }

    blockquote {
        line-height: 1.2;
        background-color: #DDDCD0 !important;
    }

    h4 {
        font-size: 1.5em;
        font-weight:900;
        color:#343893;
        border-bottom: 1px solid #000000;
        font-family: "Raleway", CenturyGothic, AppleGothic, sans-serif, Century;
        font-style: italic;
        text-transform: uppercase;
    }

    h5 {
        font-size: 1.3em;
        font-weight:900;
        color:#343893;
        font-family: "Raleway", CenturyGothic, AppleGothic, sans-serif, Century;
        font-style: italic;
    }

    h3 {
        background:#343893;
        font-size: 1.9em;
        padding:5px;
        color:#ffffff;
        text-transform: uppercase;
        font-family: "Raleway", CenturyGothic, AppleGothic, sans-serif, Century;
    }

    .avis {
        padding: 0 !important;
        padding-top: 10px !important;
        background-color: #DDDCD0 !important;
    }

    strong {
        font-weight: bold;
    }

    .form-group {
        font-size: 10px;
        padding: 0;
        margin: 0;
    }

    .avis {
        background: #DCE6F1;
        padding: 0 10px 10px 10px;
        margin: 5px 0 5px 0;
    }

    .domaine {
        background: #D9D9D9;
        padding: 0;
        margin: 5px 0 5px 0;
        position: relative;
        top: -90px;
    }
    .domaine .quote {
        padding: 0 10px;
    }

    .team {
        height: 100px;
        padding:0 10px;
    }

    .table1 {
        font-family: "Raleway", CenturyGothic, AppleGothic, sans-serif, Century;
        width:100%;
    }

    .project_id {
        text-align: left;
        color: #7f7f7f;
        width: 10%;
    }

    .project-title {
        text-align: left;
        padding-left: 155px;
        font-size: 2em;
        color: #343893;
        font-weight: bolder;
        width: 90%;
    }
    hr {
        border-bottom:1px solid #7f7f7f;
    }

    .project {
        height:150px;
    }

    .synthesis {
        height: 200px;
        padding: 0 10px;
        position: relative;
        top: 75px;
    }

    .image1, .image2 {
        text-align: center;
        margin-top:20px;
    }

    .illustration {
        max-height:250px;
    }

    .completeness {
        padding: 0 10px;
        height: 100px;
        position: relative;
        top: 115px;
    }

    .analysis1 {
        padding: 0 10px;
        position: relative;
        top: 90px;
    }

    .analysis2 {
        padding: 0 10px;
        position: relative;
        top: 100px;
    }

    .analysis3 {
        padding: 0 10px;
        position: relative;
        top: 150px;
    }

    .analysis4 {
        padding: 0 10px;
        position: relative;
        top: 150px;
    }

    .table-arrangement {
        border: 0;
        width: 100%;
    }

    .table-arrangement td {
        width: 50%;
        color: #000000;
        padding: 10px;
    }

    .table-arrangement h5 {
        position: relative;
        bottom: 60px;
    }

    .advice-title {
        position: relative;
        top: 100px;
    }

    .advice-title h5{
        top: -30px;
    }
    .avis1 {
        top: 10px;
    }
    .avis2 {
        position: relative;
        top: -70px;
    }
    .price {
        position: relative;
        top: -90px;
    }
</style>

<body>
<br><br><br><br>
<hr>
<table  class="table1">
    <tr class="project">
        <td class="project_id"><?php echo $projects; ?>
        </td>
        <td class="project-title">
			<?php echo $projects->content[1]; ?>
        </td>
    </tr>

</table>

<div class="row">
    <div class="col-md-12">
        <div class="form-group team">
            <h3 ><?php echo trans('form.line-up')?></h3>
            <strong><?php echo trans('form.line-up')?> :</strong> <?php echo $projects->content[2]; ?><br/><br/>
            <strong><?php echo trans('form.designer')?> :</strong> <?php echo $projects->content[3]; ?><br/><br/>
            <strong><?php echo trans('form.investor.sponsor')?> :</strong> <?php echo $projects->content[4]; ?><br/><br/>
            <strong><?php echo trans('form.manager')?> :</strong> <?php echo $projects->content[5]; ?> <br /><br/>
            <strong><?php echo trans('form.other')?> :</strong> <?php echo $projects->content[6]; ?> <br/>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 synthesis">
        <div class="form-group">
            <h3><?php echo trans('form.offer_synthesis')?></h3>
            <h4><?php echo trans('form.description')?></h4>
			<?php echo $projects->content[31]; ?><br/>
            <br><br>
            <h4><?php echo trans('form.advice.summary')?></h4>
            <div class="avis1">
                <div class="quote">
					<?php echo $projects->content[32]; ?><br/>
                </div>
            </div>
        </div>
        <pagebreak />
		<?php if( $projects->content[29] != '' ) : ?>
        <div class="row">
            <div class="col-md-12 image1">
                <img class="illustration" src="<?php echo url('storage') . "/" . $projects->content[29] ?>"/>

            </div>
        </div>
		<?php endif; ?>
		<?php if( $projects->content[30] != '' ) : ?>
        <div class="row">
            <div class="col-md-12 image2">
                <img class="illustration" src="<?php echo url('storage') . "/" . $projects->content[29] ?>"/>
            </div>
        </div>
		<?php endif; ?>
        <pagebreak />
    </div>
</div>
<div class="row">
    <div class="col-md-12 completeness">
        <div class="form-group">
            <h3 ><?php echo trans('form.completeness.case')?></h3>
            <h4><?php echo trans('form.missing_element.commentary')?></h4>
			<?php echo $projects->content[7]; ?>
        </div>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-md-12 analysis1">
        <h3><?php echo trans('form.offer_analysis_particular_conditions')?></h3>
        <div class="form-group analysis">
            <h4><?php echo trans('form.recall.stage2')?></h4>
			<?php if($projects->content[8] != '') : ?>
			<?php echo $projects->content[8]; ?><br/>
            <br/>
			<?php endif; ?>
            <br><br>
            <h4><?php echo trans('form.recall.vigilance.point')?></h4>
			<?php if( $projects->content[9] != '') : ?>
			<?php echo $projects->content[9]; ?><br/><br/>
			<?php endif; ?>
            <br><br>
            <h4><?php echo trans('form.lpd.urban')?></h4>
			<?php if( $projects->content[10] != '') : ?>
			<?php echo $projects->content[10]; ?><br/>
			<?php endif; ?>
        </div>
    </div>
</div>
<br/>
<pagebreak />
<div class="row">
    <div class="col-md-12 analysis2">
        <h3 ><?php echo strtoupper(trans('form.analysis.offer'))?> - 1/3</h3>
        <div class="form-group">
            <h4><?php echo trans('form.quality.program')?></h4>
			<?php if( $projects->content[11] != '') : ?>
			<?php echo $projects->content[11]; ?><br/>
            <br/>
			<?php endif; ?>
            <h5><?php echo trans('form.evolution.candidacy')?></h5>
			<?php if( $projects->content[12] != '') : ?>
			<?php echo $projects->content[12]; ?><br/>
            <br/>
			<?php endif; ?>
            <h5><?php echo trans('form.advice.program')?></h5>
			<?php if( $projects->content[13] != '') : ?>
            <div class="avis">
                <div class="quote">
					<?php echo $projects->content[13]; ?><br/>
                </div>
            </div>
			<?php endif; ?>
            <br><br>
            <h4><?php echo strtoupper(trans('form.urban.quality'))?></h4>
			<?php if( $projects->content[14] != '') : ?>
			<?php echo $projects->content[14]; ?><br/>
            <br/>
			<?php endif; ?>
            <h5><?php echo trans('form.advice.quality')?></h5>
			<?php if( $projects->content[15] != '') : ?>
            <div class="avis">
                <div class="quote">
					<?php echo $projects->content[15]; ?><br/>
                </div>
            </div>
			<?php endif; ?>
        </div>
    </div>
</div>
<pagebreak />
<div class="row">
    <div class="col-md-12 analysis3">
        <h3><?php echo strtoupper(trans('form.analysis.offer'))?> - 2/3</h3>
        <div class="form-group">
            <h4><?php echo trans('form.innovative.character')?></h4>
			<?php if( $projects->content[16] != '') : ?>
			<?php echo $projects->content[16]; ?><br/>
            <br/>
			<?php endif; ?>
            <h5><?php echo trans('form.evolution.candidacy')?></h5>
			<?php if( $projects->content[17] != '') : ?>
			<?php echo $projects->content[17]; ?><br/>
            <br/>
			<?php endif; ?>
            <h5><?php echo trans('form.advice.innovative')?></h5>
			<?php if( $projects->content[18] != '') : ?>
            <div class="avis">
                <div class="quote">
					<?php echo $projects->content[18]; ?><br/>
                </div>
            </div>
			<?php endif; ?>
            <br><br>
            <h4><?php echo strtoupper(trans('form.global.warming'))?></h4>
			<?php if( $projects->content[19] != '') : ?>
			<?php echo $projects->content[19]; ?><br/>
            <br/>
			<?php endif; ?>
            <h5><?php echo trans('form.evolution.candidacy')?></h5>
			<?php if( $projects->content[20] != '') : ?>
			<?php echo $projects->content[20]; ?><br/>
            <br/>
			<?php endif; ?>
            <h5><?php echo trans('form.global.advice')?></h5>
			<?php if( $projects->content[21] != '') : ?>
            <div class="avis">
                <div class="quote">
					<?php echo $projects->content[21]; ?><br/>
                </div>
            </div>
			<?php endif; ?>
        </div>
    </div>
</div>
<pagebreak />
<div class="row">
    <div class="col-md-12 analysis4">
        <h3><?php echo strtoupper(trans('form.analysis.offer'))?> - 3/3</h3>
        <div class="form-group">
            <div class="form-group">
                <table class="table-arrangement">
                    <tr>
                        <td><h4><?php echo trans('form.legal.assembly')?></h4></td>
                        <td><h4><?php echo trans('form.financial.arrangement')?></h4></td>
                    </tr>
                    <tr>
                        <td>
                            <div> <?php echo $projects->content[22]; ?></div>
                        </td>
                        <td>
                            <div> <?php echo $projects->content[24]; ?></div>
                        </td>
                    </tr>
                    <tr class="advice-title">
                        <td><h5><?php echo trans('form.advice.assembly')?></h5></td>
                        <td><h5><?php echo trans('form.advice.financial')?></h5></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="avis2">
                                <div class="quote">
									<?php echo $projects->content[23]; ?><br/>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="avis2">
                                <div class="quote">
									<?php echo $projects->content[25]; ?><br/>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class ="price">
                <h4><?php echo ucfirst(strtolower(trans('form.sale.price')))?></h4>
				<?php if( $projects->content[26] != '') : ?>
				<?php echo $projects->content[26]; ?><br/>
                <br/>
				<?php endif; ?>
                <h5><?php echo trans('form.advice.price')?></h5>
				<?php if( $projects->content[27] != '') : ?>
                <div class="avis">
                    <div class="quote">
						<?php echo $projects->content[27]; ?><br/>
                    </div>
                </div>
				<?php endif; ?>
            </div>
            <div class="domaine">
                <h3><?php echo strtoupper(trans('form.analysis.domain'))?></h3>
				<?php if( $projects->content[28] != '') : ?>
                <div class="quote">
					<?php echo $projects->content[28]; ?><br/>
                </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>
</body>
