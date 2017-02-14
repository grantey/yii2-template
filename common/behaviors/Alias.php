<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\behaviors;

use yii;
use yii\base\Behavior;
use yii\db\ActiveRecord;
use yii\helpers\Inflector;

class Alias extends Behavior
{
	public $in_attribute = 'title';
	public $out_attribute = 'alias';
	public $translit = true;

	public function events()
	{
		return [
			ActiveRecord::EVENT_BEFORE_INSERT => 'getAlias'
		];
	}

	public function getAlias( $event )
	{
        	$attr = empty( $this->owner->{$this->out_attribute}) ? 
                    $this->in_attribute : $this->out_attribute;
                $n = $this->generateAlias( $this->owner->{$attr} );
                $this->owner->{$this->out_attribute} = $n;
                
                \file_put_contents("test.txt", $this->owner->{$attr}.' '.$n, FILE_APPEND);
	}

	private function generateAlias( $alias )
	{
		$alias = $this->aliasify( $alias );
		if ( $this->checkUniqueAlias( $alias ) == 0 ) {
			return $alias;
		} else {
			for ( $suffix = 2; $this->checkUniqueAlias( $new_alias = $alias . '-' . $suffix ) != 0; $suffix++ ) {}
			return $new_alias;
		}
	}

	private function aliasify( $alias )
	{
		if ( $this->translit ) {
			return $this->transliteration( $alias );
		} else {
			return $this->alias( $alias, '-', true );
		}
	}

	private function alias( $string, $replacement = '-', $lowercase = true )
	{
		$string = preg_replace( '/[^\p{L}\p{Nd}]+/u', $replacement, $string );
		$string = trim( $string, $replacement );
		return $lowercase ? strtolower( $string ) : $string;
	}

	private function checkUniqueAlias( $alias )
	{
		$pk = $this->owner->primaryKey();
		$pk = $pk[0];

		$condition = $this->out_attribute . ' = :out_attribute';
		$params = [ ':out_attribute' => $slug ];
		if ( !$this->owner->isNewRecord ) {
			$condition .= ' and ' . $pk . ' != :pk';
			$params[':pk'] = $this->owner->{$pk};
		}
                
		return $this->owner->find()
			->where( $condition, $params )->count();			
	}
        
        function transliteration($str)
        {
            $transliteration = array(
                'А' => 'a', 'а' => 'a',
                'Б' => 'b', 'б' => 'b',
                'В' => 'v', 'в' => 'v',
                'Г' => 'g', 'г' => 'g',
                'Д' => 'd', 'д' => 'd',
                'Е' => 'e', 'е' => 'e',
                'Ё' => 'yo', 'ё' => 'yo',
                'Ж' => 'zh', 'ж' => 'zh',
                'З' => 'z', 'з' => 'z',
                'И' => 'i', 'и' => 'i',
                'Й' => 'j', 'й' => 'j',
                'К' => 'k', 'к' => 'k',
                'Л' => 'l', 'л' => 'l',
                'М' => 'm', 'м' => 'm',
                'Н' => "n", 'н' => 'n',
                'О' => 'o', 'о' => 'o',
                'П' => 'p', 'п' => 'p',
                'Р' => 'r', 'р' => 'r',
                'С' => 's', 'с' => 's',
                'Т' => 't', 'т' => 't',
                'У' => 'u', 'у' => 'u',
                'Ф' => 'f', 'ф' => 'f',
                'Х' => 'h', 'х' => 'h',
                'Ц' => 'z', 'ц' => 'cz',
                'Ч' => 'ch', 'ч' => 'ch',
                'Ш' => 'sh', 'ш' => 'sh',
                'Щ' => 'sh', 'щ' => 'sh',
                'Ъ' => '', 'ъ' => '',
                'Ы' => 'i', 'ы' => 'i',
                'Ь' => '', 'ь' => '',
                'Э' => 'e', 'э' => 'e',
                'Ю' => 'yu', 'ю' => 'yu',
                'Я' => 'ya', 'я' => 'ya',                
            );

            $str = trim($str);
            $str = preg_replace('/[^0-9a-zA-Zа-яА-Я\s]/', '', $str);
            $str = preg_replace('/\s\s/', ' ', $str);
            $str = strtr($str, $transliteration);            
            $str = preg_replace('/\s/', '-', $str);
            
            return $str;
        }
}
