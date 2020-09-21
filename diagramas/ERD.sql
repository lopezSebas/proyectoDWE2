CREATE TABLE USUARIOS (
    ID INT GENERATED ALWAYS AS IDENTITY,
    Usuario VARCHAR NOT null,
    Password VARCHAR NOT null,
    Tipo VARCHAR NOT null,
    Telefono VARCHAR NOT null,
    Nombre VARCHAR NOT null,
    Apellido VARCHAR NOT null
);

CREATE TABLE PROVEEDORES (
    ID INT GENERATED ALWAYS AS IDENTITY,
    Nombre VARCHAR NOT null,
    NIT VARCHAR NOT null,
    Correo VARCHAR NOT null,
    Telefono VARCHAR NOT null,
    Tipo VARCHAR NOT null
);

CREATE TABLE ORDENES (
    ID INT GENERATED ALWAYS AS IDENTITY,
    ID_Usuario INT,
    ID_Proveedor INT,
    Fecha date NOT null,
    Estado VARCHAR NOT null,
    Fecha_entrega date NOT null
);


CREATE TABLE PRODUCTOS (
    ID INT GENERATED ALWAYS AS IDENTITY,
    Codigo VARCHAR NOT null,
    Descripcion VARCHAR NOT null,
    Marca VARCHAR NOT null,
    Tipo VARCHAR NOT null,
    URL VARCHAR NOT null
);

CREATE TABLE SUCURSALES (
    ID INT GENERATED ALWAYS AS IDENTITY,
    Nombre VARCHAR NOT null,
    Direccion VARCHAR NOT null,
    Correo VARCHAR NOT null,
    Telefono VARCHAR NOT null
);

CREATE TABLE INVENTARIO (
    ID INT GENERATED ALWAYS AS IDENTITY,
    ID_Producto INT,
    ID_Sucursal INT,
    ID_Proveedor INT,
    Estado VARCHAR NOT null,
    Tipo VARCHAR NOT null,
    Fecha_modificacion timestamp 
);

CREATE TABLE ORDENES_DETALLES (
    ID INT GENERATED ALWAYS AS IDENTITY,
    ID_Orden INT,
    ID_Inventario INT,
    Cantidad numeric,
    Costo_unitario numeric
);


----------LLAVES PRIMARIAS---------------
ALTER TABLE public.usuarios ADD CONSTRAINT usuarios_pk PRIMARY KEY (id);
ALTER TABLE public.proveedores ADD CONSTRAINT proveedores_pk PRIMARY KEY (id);
ALTER TABLE public.ordenes ADD CONSTRAINT ordenes_pk PRIMARY KEY (id);
ALTER TABLE public.productos ADD CONSTRAINT productos_pk PRIMARY KEY (id);
ALTER TABLE public.sucursales ADD CONSTRAINT sucursales_pk PRIMARY KEY (id);
ALTER TABLE public.inventario ADD CONSTRAINT inventario_pk PRIMARY KEY (id);
ALTER TABLE public.ordenes_detalles ADD CONSTRAINT ordenes_detalles_pk PRIMARY KEY (id);


---------LLAVES FORANEAS-----------------
ALTER TABLE public.ordenes ADD CONSTRAINT ordenes_fk FOREIGN KEY (id_usuario) REFERENCES public.ordenes(id);
ALTER TABLE public.ordenes ADD CONSTRAINT ordenes_fk2 FOREIGN KEY (id_proveedor) REFERENCES public.ordenes(id);
ALTER TABLE public.inventario ADD CONSTRAINT inventario_fk FOREIGN KEY (id_producto) REFERENCES public.inventario(id);
ALTER TABLE public.inventario ADD CONSTRAINT inventario_fk2 FOREIGN KEY (id_sucursal) REFERENCES public.inventario(id);
ALTER TABLE public.inventario ADD CONSTRAINT inventario_fk3 FOREIGN KEY (id_proveedor) REFERENCES public.inventario(id);
ALTER TABLE public.ordenes_detalles ADD CONSTRAINT ordenes_detalles_fk FOREIGN KEY (id_orden) REFERENCES public.ordenes_detalles(id);
ALTER TABLE public.ordenes_detalles ADD CONSTRAINT ordenes_detalles_fk2 FOREIGN KEY (id_inventario) REFERENCES public.ordenes_detalles(id);
