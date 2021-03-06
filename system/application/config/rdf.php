<?php

// Relationship types
$config['rel'] = array('annotations', 'paths', 'tags', 'replies');
$config['ref'] = array('references');

// Namespaced used for RDF operations
$config['namespaces'] = array(		
    					'rdf'       => 'http://www.w3.org/1999/02/22-rdf-syntax-ns#',
      				    'rdfs'      => 'http://www.w3.org/2000/01/rdf-schema#',
  						'dc'        => 'http://purl.org/dc/elements/1.1/',
  						'dcterms'   => 'http://purl.org/dc/terms/',
  						'ctag'      => 'http://commontag.org/ns#',
  						'art'       => 'http://simile.mit.edu/2003/10/ontologies/artstor#',
  						'sioc'      => 'http://rdfs.org/sioc/ns#',
  						'sioctypes' => 'http://rdfs.org/sioc/types#',
  						'foaf'      => 'http://xmlns.com/foaf/0.1/',
  						'owl'       => 'http://www.w3.org/2002/07/owl#',
  						'ov'		=> 'http://open.vocab.org/terms/',
  						'oac'		=> 'http://www.openannotation.org/ns/',
  						'scalar'    => 'http://scalar.usc.edu/2012/01/scalar-ns#',
  						'shoah'		=> 'http://tempuri.org/'
					   );
					   
// Database fields to namespace
$config['rdf_fields'] = array(
		'type' => 					'rdf:type',
		'name' =>					'foaf:name',
		'homepage' =>				'foaf:homepage',
		'user' =>					'foaf:homepage', 
		'fullname' =>				'dcterms:creator',
		'title' => 					'dcterms:title',
		'description' => 			'dcterms:description',
		'created' => 				'dcterms:created',
		'table_of_contents' =>		'dcterms:tableOfContents',
		'has_version' =>			'dcterms:hasVersion',
		'version_of' =>				'dcterms:isVersionOf',
		'part_of' =>				'dcterms:isPartOf',
		'has_part' =>				'dcterms:hasPart',
		'references' => 			'dcterms:references',
		'has_reference' =>			'dcterms:isReferencedBy',
		'replaces' =>				'dcterms:replaces',
		'replaced_by' =>			'dcterms:isReplacedBy',
		'background' =>				'scalar:background',	
		'color' => 					'scalar:color',
		'audio' => 					'scalar:audio',
		'urn' => 					'scalar:urn',
		'default_view' =>			'scalar:defaultView',
		'has_annotation' => 		'scalar:hasAnnotation',
		'continue_to_content_id' => 'scalar:continue_to_content_id',
		'version' =>				'scalar:version',
		'version_num' => 			'ov:versionnumber',
		'content' => 				'sioc:content',
		'users' =>					'sioc:has_owner',
		'url' =>			    	'art:url',
		'thumbnail' => 				'art:thumbnail',
		'has_body' => 				'oac:hasBody',
		'has_target' =>				'oac:hasTarget'
);			   
					   
// Ontology fields available for custom metadata
$config['ontologies'] = array();
$config['ontologies']['dcterms'] = array(
			'abstract', 
			'accessRights', 
			'accrualMethod', 
			'accrualPeriodicity', 
			'accrualPolicy', 
			'alternative', 
			'audience',
			'available', 
			'bibliographicCitation', 
			'conformsTo', 
			'contributor', 
			'coverage', 
			'created', 
			'creator', 
			'date',
			'dateAccepted',
			'dateCopyrighted', 
			'dateSubmitted', 
			'description', 
			'educationLevel',
			'extent',
			'format', 
			'hasFormat', 
			'hasPart', 
			'hasVersion', 
			'identifier', 
			'instructionalMethod',
			'isFormatOf', 
			'isPartOf', 
			'isReferencedBy', 
			'isReplacedBy', 
			'isRequiredBy',
			'issued', 
			'isVersionOf', 
			'language', 
			'license',
			'mediator',
			'medium', 
			'modified', 
			'provenance', 
			'publisher', 
			'references', 
			'relation',
			'replaces',
			'requires', 
			'rights', 
			'rightsHolder', 
			'source', 
			'spatial', 
			'subject', 
			'tableOfContents',
			'temporal', 
			'title', 
			'type', 
			'valid'
);	
$config['ontologies']['art'] = array(
			'authority', 
			'geographic', 
			'hasMediaFile', 
			'height', 
			'imageId',
			'imageSource', 	
			'inCollection', 
			'lps', 
			'lpsid', 	
			'mediafileFormat',
			'metadataCreationDate', 
			'metadataUpdateDate', 	
			'nationality',  
			'objectId', 
			'thumbnail',
			'topic', 	
			'resolution',  
			'serverurl', 
			'sourceLocation',
			'vitalDates', 
			'width'			
);	

// Internet Archive allowable filetypes when importing
$config['internet_archive']['filetypes'] = array(
			'MPEG4',
			'512Kb+MPEG4',
			'h.264',
			'WAVE',
			'QuickTime',
			'160Kbps+MP3',
			'128Kbps+MP3',
			'64Kbps+MP3',
			'56Kbps+MP3',
			'VBR+MP3',
			'JPEG+Thumb',
			'JPEG',
			'Text+PDF'
);
?>