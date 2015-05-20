<?php /* Smarty version 2.6.22, created on 2015-05-19 16:56:48
         compiled from search/search_frontend.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'label', 'search/search_frontend.tpl', 1, false),)), $this); ?>
<h2><?php echo smarty_function_label(array('get' => 'TXT_SEARCH_RESULTS'), $this);?>
</h2>
    <ul><?php $_from = $this->_tpl_vars['keywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
        <?php if ($this->_tpl_vars['k'] == 'type'): ?>
            <h3> <?php echo $this->_tpl_vars['v']; ?>
s </h3>
        <?php else: ?>
                <li>
                    <a class="units-link" href="/index.php?module=page&amp;action=show&amp;page_id=<?php echo $this->_tpl_vars['v']; ?>
"><strong><?php echo $this->_tpl_vars['k']; ?>
</strong>
                    </a> <br />
                </li>
                <br />
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    </ul>