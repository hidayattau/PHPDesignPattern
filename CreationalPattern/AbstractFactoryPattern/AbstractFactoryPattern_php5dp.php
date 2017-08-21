<?php

/**
 * Reference : http://www.php5dp.com/category/design-patterns/abstract-factory/
 */

/**
 * IAbFactory interface: Establishes the methods for the concrete factories.
 * 
 * - PhoneFactory implements operations to create phone products
 * - TabletFactory implements operations to create tablet products
 * - DesktopFactory implements operations to create desktop products
 */
interface IAbFactory
{
    public function create_products();
}

class PhoneFactory implements IAbFactory
{
    public function create_products()
    {
        $header = new PhoneHeader();
        $image = new PhoneImage();
        $text = new PhoneText();
        
        return $header->makeHeader() . PHP_EOL  . $image->makeImage() . PHP_EOL . $text->makeText();
    }
}

class TabletFactory implements IAbFactory
{
    public function create_products()
    {
        $header =  new TabletHeader();
        $image = new TabletImage();
        $text = new TabletText();
        
        return $header->makeHeader() . PHP_EOL  . $image->makeImage() . PHP_EOL . $text->makeText();
    }
}

class DesktopFactory implements IAbFactory
{
    public function create_products()
    {
        $header =  new DesktopHeader();
        $image = new DesktopImage();
        $text = new DesktopText();
        
        return $header->makeHeader() . PHP_EOL  . $image->makeImage() . PHP_EOL . $text->makeText();
    }
}

/**
 * IHeaderProduct: abstract class Establishes the method for concrete header products
 * and adds protected property for returning completed product.
 * 
 * - PhoneHeader defines phone object to be created by the PhoneFactory and implements
 *   the IHeaderProduct interface
 * - TabletHeader defines tablet object to be created by the Tabletactory and implements
 *   the IHeaderProduct interface
 * - DesktopHeader defines desktop object to be created by the DesktopFactory and implements
 *   the IHeaderProduct interface
 */
abstract class IHeaderProduct
{
    protected $product;
    
    abstract public function makeHeader();
}

class PhoneHeader extends IHeaderProduct
{
    public function makeHeader()
    {
        $this->product = "Phone Header";
        
        return $this->product;
    }
}

class TabletHeader extends IHeaderProduct
{
    public function makeHeader()
    {
        $this->product = "Tablet Header";
        
        return $this->product;
    }
}

class DesktopHeader extends IHeaderProduct
{
    public function makeHeader()
    {
        $this->product = "Desktop Header";
        
        return $this->product;
    }
}

/**
 * IImageProduct: abstract class Establishes the method for concrete image and/or video 
 * products and adds protected property for returning completed product.
 * 
 * - PhoneImage defines phone object to be created by the PhoneFactory and
 *   implements the IImageProduct interface
 * - TabletImage defines tablet object to be created by the Tabletactory and
 *   implements the IImageProduct interface
 * - DesktopImage defines desktop object to be created by the DesktopFactory and
 *   implements the IImageProduct interface
 */
abstract class IImageProduct
{
    protected $product;
    
    abstract public function makeImage();
}

class PhoneImage extends IImageProduct
{
    public function makeImage()
    {
        $this->product = "Phone Image";
        
        return $this->product;
    }
}

class TabletImage extends IImageProduct
{
    public function makeImage()
    {
        $this->product = "Tablet Image";
        
        return $this->product;
    }
}

class DesktopImage extends IImageProduct
{
    public function makeImage()
    {
        $this->product = "Desktop Image";
        
        return $this->product;
    }
}

 /**
 * ITextProduct: abstract class Establishes the method for concrete text products
 * and adds protected property for returning completed product.
 * 
 * - PhoneText defines phone object to be created by the PhoneFactory and
 *   implements the ITextProduct interface
 * - TabletText defines tablet object to be created by the Tabletactory and
 *   implements the ITextProduct interface
 * - DesktopText defines desktop object to be created by the DesktopFactory and
 *   implements the ITextProduct interface
 */
abstract class ITextProduct
{
    protected $product;
    
    abstract public function makeText();
}

class PhoneText extends ITextProduct
{
    public function makeText()
    {
        $this->product = "Phone Text";
        
        return $this->product;
    }
}

class TabletText extends ITextProduct
{
    public function makeText()
    {
        $this->product = "Tablet Text";
        
        return $this->product;
    }
}

class DesktopText extends ITextProduct
{
    public function makeText()
    {
        $this->product = "Desktop Text";
        
        return $this->product;
    }
}

/**
 * Running The Code Above Using This Trigger
 */
$device = "desktop";
$factory = NULL;

switch($device)
{
    case "phone" :
        $factory = new PhoneFactory();
        break;
    case "tablet" :
        $factory = new TabletFactory();
        break;
    case "desktop" :
        $factory = new DesktopFactory();
        break;
    default :
        break;
}

if(is_object($factory))
{
    echo $factory->create_products();
}
