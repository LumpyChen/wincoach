@extends('Admin.app')

@section('content')
<div class="table">
	<br />
	<table cellpadding="0" cellpadding="1" class="table_list2" align="center">
		<caption>修改登录密码</caption>
		<tr>
			<td>
				<table  align="center" cellpadding="0" cellspacing="1">
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td align="right" width="35%">您的旧密码:</td>
					<td>
						<input name="oldpass" type="password" maxlength="20" size="25" tabindex="1" align="center">
					</td>
						</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td align="right">
							输入新密码：
						</td>
						<td>
							<input type="password" name="password" size="25" tabindex="2">
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td align="right">新密码确认：</td>
						<td>
							<input type="password" name="confirmPassword" size="25" tabindex="3">
						</td>
					</tr>	
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							<input type="button" value="确定" class="button">
							&nbsp;
							<input type="reset" value="取消" class="button">
						</td>
					</tr>	
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					</table>
				</td>
			</tr>		
	</table>
</div>
@endsection