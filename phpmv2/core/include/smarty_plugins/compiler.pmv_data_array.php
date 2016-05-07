<?php
function smarty_compiler_pmv_data_array($tag_attrs, &$compiler)
{
	static $stack_rank = -1;
	$output = "";
	if ($stack_rank < 0)
	{
		$stack_rank = 0;
		$output = '$_tplvars_stack = array(); $_tplvars_stack_rank = '.$stack_rank.';'."\n";
	}

    $_params = $compiler->_parse_attrs($tag_attrs);

    $output .= "\n  /*** pmv_data_array ***/  \n";
    $output .= '$_tplvars_stack_rank++;'."\n";

    // Save template context
    $output .= ' $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; '."\n";

    $headline = null;
    $img_path = null;
    $xref = null;
    $template_file = 'common/data_array.tpl';
    $data = array();
	
	if ( isset($_params['template']) )
    {
        $template_file = $compiler->_dequote( $_params['template'] );
    }

	// id used for interest or other limits/sorting/etc
	if(!isset($_params['id']))
	{
		$_params['id'] = "'int'";
		$id = "int";
	}
	else
	{
		$id = $compiler->_dequote( $_params['id'] );
	}

	
	foreach( $_params as $key => $varname) 
	{
		$output .= "\$this->assign('{$key}', ".$varname.");\n";
	}
	$output .= '?>'.$compiler->_compile_include_tag( "file='$template_file'" );
	
	// restore the real context
	$output .= "\n".'<?php $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); ';
    $output .= '$_tplvars_stack--;'."\n";
    return $output;
}
?>