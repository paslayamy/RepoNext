public function LocalRem($id=false)
	{

			// $result[] = $this->siteURL;

			// $result[] = $this->sectionsOut();

			$result[] = $this->productsOut($id);

			// $result[] = $this->propertiesOut();

			if(!empty($id)){
				$res = CCatalogSKU::getOffersList($id, $iblockID = 0, $skuFilter = array(), $fields = array(), $propertyFilter = array());

				if(is_array($res)){
					foreach ($res[$id] as $key => $value) {
						$this->productsTPOut($key);
						// $this->propertiesTPOut();
					}
				}
			}

			// $result[] = $this->productsTPOut($id);

			// $result[] = $this->propertiesTPOut();




		return $result;

	}
