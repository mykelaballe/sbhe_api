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
<p>Daily Progress Report<br><span>{{ $report_date }}</span></p>
<div style="display: block; width:100%;">
	<table class="table">
		<tr>
			<td class="label">Project: </td>
			<td class="info">{{ $project }}</td>
		</tr>
		<tr>
			<td class="label">Activity: </td>
			<td class="info">{{ $activity }}</td>
		</tr>
		<tr>
			<td class="label">Location: </td>
			<td class="info">{{ $location }}</td>
		</tr>
		<tr>
			<td class="label">Drawing No: </td>
			<td class="info">{{ $drawing_no }}</td>
		</tr>
		<tr>
			<td class="label">Accomplishments: </td>
			<td class="info">{{ $accomplishments }}%</td>
		</tr>
		<tr>
			<td class="label">Hours: </td>
			<td class="info">{{ $hours }}</td>
		</tr>
	</table>
	<table class="table">
		<tr>
			<td class="label">Start Date: </td>
			<td class="info">{{ $start_date }}</td>
		</tr>
		<tr>
			<td class="label">End Date: </td>
			<td class="info">{{ $end_date }}</td>
		</tr>
		<tr>
			<td class="label">Manpower: </td>
			<td class="info">{{ $manpower }}</td>
		</tr>
		<tr>
			<td class="label">Gridline: </td>
			<td class="info">{{ $gridline }}</td>
		</tr>
		<tr>
			<td class="label">Created By: </td>
			<td class="info">{{ $created_by }}</td>
		</tr>
		<tr>
			<td class="label">Approved By: </td>
			<td class="info">{{ $approved_by }}</td>
		</tr>
	</table>
	<div class="clear"></div>
</div>
<p>{{ $heirarchy }}</p>
<div style="text-align:center;">
	@foreach($images as $path)
		<img src="{{ $path }}" />
	@endforeach
</div>