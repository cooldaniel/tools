<?php
/**
 * 该目录为工厂模式包.
 * @version 2011.09.16
 * @author lsx
 * 
 * 工厂模式有以下三种类型:
 * (1)简单工厂模式(Simple Factory), 又称静态工厂方法模式(Static Factory Method).
 * (2)工厂方法模式(Factory Method), 又称多态性工厂模式(Polymorphic Factory),或虚拟构造子模式(Virtual Constructor).
 * (3)抽象工厂模式(Abstract Factory), 又称工具箱模式(Kit/Toolkit).
 * 
 * 简单工厂模式
 * 在简单工厂模式中,工厂角色类处于对产品角色类实例化的中心位置上,它知道每一个产品并决定哪一个产品应当被实例化.
 * 简单工厂模式只在有限程度上支持"开-闭"原则,其优缺点都体现在工厂角色类的"以不变应万变"
 * 设计思想上.当具体应用系统简明确定时,使用该模式能够很好地体现其优点,即允许客户端相对独立于产品创建过程,并在
 * 系统引进新产品时无需修改客户端;在这点上支持"开-闭"原则.但具体应用系统复杂模糊或者扩展变动性较大时则更多地
 * 体现的是其缺点,即需要很大幅度地修改工厂角色类以引用新的产品类,从而又显得对"开-闭"原则支持的不足.
 * 可以使用工厂方法模式克服简单工厂模式的缺点.
 * 
 * 
 */
?>