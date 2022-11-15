<?php

namespace HRETA\EntidadesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HRETA\EntidadesBundle\Entity\TipoDoc;
use HRETA\EntidadesBundle\Entity\Aspectos;

class TipoDocumentosFixture implements FixtureInterface {

    public function load(ObjectManager $manager) {


        $parameters = array(
            array('denominador' => 'Vista de Procesos', 'descripcion' => 'En esta actividad se discute el marco estructural de la arquitectura de negocio, donde se identifican los macroprocesos de la organización.', 'aspectos' =>
                array(
                    '1' => 'Conceptualizar los macro procesos del entorno corporativo (Clase, Estándares, Reglas legales, Mapa conceptual).',
                    '2' => 'Priorización de procesos (Relevancia para el negocio, Impacto en la arquitectura).',
                    '3' => 'Caracterización del entorno según la vista Identificar el dominio de la solución propuesta.',
                )),
            array('denominador' => 'Vista de Presentación', 'descripcion' => 'Describe las posibles pantallas del sistema y contenidos de las mismas', 'aspectos' =>
                array(
                    '1' => 'Definición de pantallas (Tipo, Representación del contenido (Visual, Detallado)).',
                    '2' => 'Definición de contenidos de pantallas genéricas (Áreas de trabajo, Componentes visuales, Vistas, Reportes). ',
                    '3' => 'Caracterización de los componentes visuales.',
                    '4' => 'Definición de contenidos pantalla bienvenida.',
                    '5' => 'Definición de contenidos pantalla acerca de.',
                    '6' => 'Análisis taxonómico e iconográfico.',
                    '7' => 'Caracterización del entorno según la vista',
                    '8' => 'Caracterización del entorno según la vista',
                    '9' => 'Caracterización del entorno según la vista',
                )),
            array('denominador' => 'Vista de Sistema', 'descripcion' => 'Evalúa la aplicación siguiendo el gráfico propuesto por Barry Boehm y Richard Turner', 'aspectos' =>
                array(
                    '1' => 'Priorización requisitos funcionales (Complejidad, Relevancia para el negocio, Impacto en la arquitectura)',
                    '2' => 'Agrupación de requisitos priorizados (Precedencia, cálculo del SARF, Análisis semántico)',
                    '3' => 'Identificación de los paquetes y componentes principales (Requisitos involucrados, Categoría, Componentes)',
                    '4' => 'Representación de la dependencia entre paquetes (Paralelismo, Sucesión)',
                    '5' => 'Caracterización del producto según la vista.',
                    '6' => 'Análisis de las metas arquitectónicas y su impacto en los atributos de calidad.',
                    '7' => 'Descripción de los escenarios y sus patrones de solución.'
                )),
            array('denominador' => 'Vista de Datos', 'descripcion' => 'Se analizan elementos como escenarios, patrones de solución,diccionario y modelo de datos', 'aspectos' =>
                array(
                    '1' => 'Desarrollo de diccionario de datos (Concepto, Definición, Relación entre concepto, Tipo de datos) ',
                    '2' => 'Caracterización de los conceptos (Nombre, Descripción, Valores)',
                    '3' => 'Desarrollo modelos de datos lógico ',
                    '4' => 'Desarrollo modelos de datos físico ',
                    '5' => 'Caracterización del producto según la vista. ',
                    '6' => 'Análisis de las metas arquitectónicas y su impacto en los atributos de calidad.',
                    '7' => 'Descripción de los escenarios y sus patrones de solución.',
                )),
            array('denominador' => 'Vista de Seguridad', 'descripcion' => 'En general la seguridad de las aplicaciones se establecerá en profundidad y por niveles.', 'aspectos' =>
                array(
                    '1' => 'Especificaciones de seguridad en Autenticación y Capa de presentación',
                    '2' => 'Especificaciones de seguridad en Capa de negocio',
                    '3' => 'Especificaciones de seguridad (Datos y acceso a datos, Conceptos, documentos y reportes)',
                    '4' => 'Especificaciones de seguridad en Nodos de despliegue y Servidor de aplicación',
                    '5' => 'Especificaciones de seguridad en Código (Sellado, Ofuscación, Evaluación)',
                    '6' => 'Especificaciones de seguridad en Entorno de desarrollo.  Monitoreo de la seguridad y proceso de desarrollo seguro',
                    '7' => 'Especificaciones de seguridad en Nodos de integración',
                    '8' => 'Especificaciones de seguridad en Conectores y redes',
                    '9' => 'Caracterización del producto según la vista (Identificación de requisitos de seguridad del producto).',
                    '10' => 'Análisis de las metas arquitectónicas y su impacto en los atributos de calidad',
                )),
            array('denominador' => 'Vista de Integración', 'descripcion' => 'Esta vista contiene información relevante para la integración de los diferentes componentes del producto final.', 'aspectos' =>
                array(
                    '1' => 'Selección de los estilos arquitectónicos a emplear(Denominación, Descripción, Aplicabilidad)',
                    '2' => 'Selección de la estrategia de diseño y modelo de desarrollo a utilizar (Denominación, Descripción, Aplicabilidad)',
                    '3' => 'Selección de patrones de diseño principales vista desde la integración entre las soluciones (Denominación, Descripción, Aplicabilidad, Atributos impactados)',
                    '4' => 'Selección de los estándares de codificación',
                    '5' => 'Descripción de los nodos de integración(Descripción, Componente involucrado, Conector)',
                    '6' => 'Análisis de las metas arquitectónicas y su impacto en los atributos de calidad',
                    '7' => 'Selección de los estándares de codificación',
                )),
            array('denominador' => 'Vista de Tecnología', 'descripcion' => 'Especifica  cada uno de los escenarios de despliegue el sistema operativo', 'aspectos' =>
                array(
                    '1' => 'Descripción de la tecnologías (Clase o tipo, Candidato o propuesta)',
                    '2' => 'Tecnología para el empaquetado de la solución e instalación',
                    '3' => 'Tecnología para instalación actualización y despliegue en masa',
                    '4' => 'Tecnología Sistema Operativo',
                    '5' => 'Tecnología Gestor BD',
                    '6' => 'Tecnología ORM',
                    '8' => 'Tecnología COTS Réplica',
                    '9' => 'Tecnología Lenguaje de Programación Nivel Negocio',
                    '10' => 'Tecnología Lenguaje de Programación Bajo Nivel',
                    '11' => 'Tecnología Ambiente Integrado de Desarrollo (IDE)',
                    '12' => 'Tecnología Marco de Trabajo para el Desarrollo',
                    '13' => 'Tecnología Marco de Trabajo para Interfaz Usuario',
                    '14' => 'Tecnología Modelado',
                    '15' => 'Tecnología Versionado',
                    '16' => 'Tecnología COTS Reportes',
                    '17' => 'Tecnología Servidores de Aplicaciones',
                    '18' => 'Tecnología componente COTS Autenticación',
                    '19' => 'Tecnologías de virtualización y compilación',
                    '20' => 'Análisis de las metas arquitectónicas y su impacto en los atributos de calidad.',
                )),
            array('denominador' => 'Vista de Infraestructura', 'descripcion' => '1-¿Qué tecnologías se requieren?2-¿Cómo deben ser configuradas estas para el trabajo?', 'aspectos' =>
                array(
                    '1' => 'Describa el diagrama de configuración de redes (Redes y conexiones)',
                    '2' => 'Describa el diagrama de configuración del software (Aplicaciones propias, aplicaciones legadas, Interrelaciones)',
                    '3' => 'Describa el diagrama de configuración de hardware (Infraestructura Hardware)',
                    '4' => 'Análisis de las metas arquitectónicas y su impacto en los atributos de calidad',
                    '5' => 'Descripción de los escenarios y sus patrones de solución.',
                )),
            array('denominador' => 'Vista de Despliegue', 'descripcion' => 'En esta vista se trabajan varios conceptos que influyen en el despliegue y la comercialización de las soluciones.', 'aspectos' =>
                array(
                    '1' => 'Definición del tipo de licenciamiento de la solución vista desde la arquitectura (Componentes, Arquitectura y solución, Ingresos)',
                    '2' => 'Definición de las estrategias de ingreso vista desde la arquitectura.',
                    '3' => 'Declaración de los requerimientos mínimos de Instalación, Soporte y Actualización. (Especificación de tamaño de los paquetes y soportes)',
                    '4' => 'Definición de la estrategia de empaquetamiento del producto para la implantación (Implantación y actualización).',
                    '5' => 'Declaración de la estrategia para Instalación, Soporte y Actualización.',
                    '6' => 'Caracterización del producto según la vista (licencias de los componentes que lo forman).',
                    '7' => 'Caracterización del producto (estrategias de desarrollo empleadas para su elaboración).',
                )),
            array('denominador' => 'Guía base metodológica para el diseño de Arquitecturas', 'descripcion' => 'Se describen en el documento 9 vistas de la arquitectura agrupadas en tres vistas principales', 'aspectos' =>
                array(
                    '1' => 'Declaración de las técnicas a emplear en las pruebas de concepto',
                    '2' => 'Declaración de las tecnologías requeridas para las Pruebas de Concepto',
                    '4' => 'Declaración de las herramientas utilizadas para las pruebas de conceptos ',
                    '5' => 'Presencia de resumen de las pruebas de concepto realizadas ',
                    '6' => 'Documentación de los activos reutilizados',
                    '7' => 'Evaluación de las responsabilidades y competencias para analizar las vistas',
                    '8' => 'Cubrimiento de todas las perspectivas de análisis propuestas en la guía base',
                    '9' => ' Realización de las pruebas de concepto a las decisiones tomadas. Utilizando la guía base.',
                    '10' => 'Seguimiento del orden y prioridad del análisis: Sistema, Tecnología, Infraestructura',
                )),
        );
        foreach ($parameters as $parameter) {

            $entity = new TipoDoc();
            $entity->setDenominador($parameter['denominador']);
            $entity->setDescripcion($parameter['descripcion']);
            $manager->persist($entity);

            foreach ($parameter['aspectos'] as $key => $value) {


                $aspecto = new Aspectos();
                $aspecto->setNombre($value);
                $aspecto->setTblTipoDocid($entity);
                $manager->persist($aspecto);
            }
        }
        $manager->flush();
    }

}
