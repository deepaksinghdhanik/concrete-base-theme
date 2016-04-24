<?php
//change new theme package name and theme name here..
namespace Concrete\Package\ThemeDsd\Theme\Dsd;
use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;
use Concrete\Core\Page\Theme\Theme as Theme;


class PageTheme extends Theme implements ThemeProviderInterface
{

    /**
     * Theme name.
     * 
     * @return string
     */
    public function getThemeName()
    {
        return t('Boilerplate Theme');
    }

    /**
     * Theme description.
     * 
     * @return string
     */
    public function getThemeDescription()
    {
        return t('A custom theme starting place.');
    }

    /**
     * Register theme assets, see http://goo.gl/rpJUSy
     */
	 
      public function registerAssets()
	 {
		//$this->providesAsset('javascript', 'bootstrap/*');
		$this->providesAsset('css', 'bootstrap/*');
		$this->providesAsset('css', 'blocks/form');
		$this->providesAsset('css', 'core/frontend/*');
		$this->requireAsset('javascript', 'jquery');
	}

    /**
     * Set the grid framework see http://goo.gl/1MFxbL
     *
     * 
     *
     */
	protected $pThemeGridFrameworkHandle = 'bootstrap3';
    /**
     * Set the block CSS class overrides
     *
     * public function getThemeBlockClasses()
     * {
     *     return array(
     *         'next_previous' => array('block-sidebar-wrapped'),
     *         'share_this_page' => array('block-sidebar-wrapped'),
     *         'content' => array('block-sidebar-wrapped'),
     *         'date_navigation' => array('block-sidebar-padded')
     *     );
     * }
     */
	 
	 
	 // this will add the classes over the setting > custom classes dropdown.
	 public function getThemeBlockClasses()
      {
          return array(
              'next_previous' => array('block-sidebar-wrapped' ),
              'share_this_page' => array('block-sidebar-wrapped'),
              'content' => array('block-sidebar-wrapped' , 'hello'),
              'date_navigation' => array('block-sidebar-padded')
          );
      }

    /**
     * Set theme area CSS class overides
     */
	public function getThemeAreaClasses()
	{
	  return array(
		  'Page Footer' => array('area-content-accent')
	  );
	}
	
	
    /**
     * Set default blocks template for the theme
     *
     * public function getThemeDefaultBlockTemplates()
     * {
     *     return array(
     *         'image' => 'some_special_image_template'
     *     );
     * }
     */

    /**
     * Set theme content editor styles classes
     *
     * public function getThemeEditorClasses()
     * {
     *     return array(
     *         array('title' => t('Title Thin'), 'menuClass' => 'title-thin', 'spanClass' => 'title-thin'),
     *         array('title' => t('Image Caption'), 'menuClass' => 'image-caption', 'spanClass' => 'image-caption'),
     *         array('title' => t('Primary Button'), 'menuClass' => '', 'spanClass' => 'btn btn-primary')
     *     );
     * }
     */

    /**
     * Theme layout presets (bootstrap 3 tags used)
     **/
	 
	 public function getThemeAreaLayoutPresets ()
		{
			return array(
				array(
					'handle' => 'two_col',
					'name' => 'Two Column',
					'container' => '<div class="l-cols l-cols--half"></div>',
					'columns' => array(
						'<div class="col-sm-6"></div>',
						'<div class="col-sm-6"></div>'
					),
				),
			);
		}
		 
	
		
}
