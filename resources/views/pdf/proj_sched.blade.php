<style type="text/css">
	* {
		font-family: Helvetica Neue,Arial,Helvetica,sans-serif;
	}
	p {
		padding:10px 0;
		border: 1px solid #878282;
		background-color: #e5e3e3;
		width: 100%;
		text-align: center;
		font-weight: 300;
		margin:15px 0;
	}
	p span {
		font-weight:100;
	}
	.table {
		width: 50%;
		float: left;
	}
	.table .label {
		width:30%;
	}
	.table .info {
		color:#519bd0;
	}
	.clear {
		clear: both;
	}
	.img_container {
		
	}
	img {
		display: inline-block;
		width:40%;
		height: 35%;  
		vertical-align: top;
		margin: 15px;
		margin-top: 0px;
	}
</style>
<p>Project Schedule<br><span>{{ $date }}</span></p>
<div style="display: block; width:100%;">
	<table class="table">
		<tr>
			<td class="label">Project: </td>
			<td class="info">{{ $project }}</td>
		</tr>
	</table>
	<table class="table">
		<tr>
			<td class="label">Created By: </td>
			<td class="info">{{ $created_by }}</td>
		</tr>
	</table>
	<div class="clear"></div>
</div>

<p>DESCRIPTION</p>
<span>{{ $description }}</span>

<p>COMMENTS</p>
<span>{{ $comments }}</span>