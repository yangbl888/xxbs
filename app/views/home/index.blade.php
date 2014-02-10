@extends('home.main')
 @section('content') 
 新增
  <table class="table table-striped table-bordered table-hover" id="sample_1">
				<thead>
										<tr>
											<th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>
											<th>Username</th>
											<th class="hidden-480">Email</th>
											<th class="hidden-480">Points</th>
											<th class="hidden-480">Joined</th>
											<th ></th>
										</tr>
									</thead>
									<tbody>
   @foreach ($posts as $post)
   						<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
											<td>{{$post->UserId}}</td>
											<td class="hidden-480">{{ HTML::link('user/edit/'.$post->Id, $post->UserId) }}</td>
											<td class="hidden-480">120</td>
											<td class="center hidden-480">12 Jan 2012</td>
											<td ><span class="label label-success">Approved</span></td>
										</tr>
     @endforeach
  </tbody>
   </table>
   	{{ javascript_include_tag('select2.min.js') }}
	{{ javascript_include_tag('jquery.dataTables.js') }}
	{{ javascript_include_tag('DT_bootstrap.js') }}
    {{ javascript_include_tag('app.js') }}
	{{ javascript_include_tag('table-managed.js') }}   
	<script>
		jQuery(document).ready(function() {       
		   App.init();
		   TableManaged.init();
		});
	</script>
{{ $posts->links(); }}
 @endsection