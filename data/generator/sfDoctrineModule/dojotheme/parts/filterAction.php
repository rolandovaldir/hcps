  public function executeFilter(sfWebRequest $request)
  {
    <?php $aux_extra_url_custom_id = array_key_exists('extra_url_custom_id', $this->params) ? " . '?" . $this->params['extra_url_custom_id'] . '=\' . $request->getParameter(\'' .  $this->params['extra_url_custom_id'] . '\')' : '' ?>
    $this->setPage(1);

    if ($request->hasParameter('_reset'))
    {
      $this->setFilters($this->configuration->getFilterDefaults());

      $this->redirect('@<?php echo $this->getUrlForAction('list') ?>' <?php echo $aux_extra_url_custom_id ?>);
    }

    $this->filters = $this->configuration->getFilterForm($this->getFilters());

    $this->filters->bind($request->getParameter($this->filters->getName()));
    if ($this->filters->isValid())
    {
      $this->setFilters($this->filters->getValues());

      $this->redirect('@<?php echo $this->getUrlForAction('list') ?>' <?php echo $aux_extra_url_custom_id ?>);
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();

    $this->setTemplate('index');
  }
