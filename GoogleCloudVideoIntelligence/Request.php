<?php
namespace GoogleCloudVideoIntelligence;
use JsonSerializable;
/**
 *Represents Google cloud video intelligence request
 */
class Request implements JsonSerializable
{

  /**
  * @var string
  *
  *Google cloud storage location uri of video to be annotated
  */
  protected $inputUri;

  /**
  * @var string
  *
  *The video data bytes. A base64-encoded string. Alternate for inputUri
  */
  protected $inputContent;

  /**
  * @var array
  *
  *Requested video annotation features. possible values include : FEATURE_UNSPECIFIED, LABEL_DETECTION, SHOT_CHANGE_DETECTION, EXPLICIT_CONTENT_DETECTION
  */
  protected $features = array();

  /**
  * @var VideoContext
  *
  *Additional video context and/or feature-specific parameters.
  */
  protected $videoContext;

  /**
  * @var string
  *
  *Optional location where the output (in JSON format) should be stored. GCS URI
  */
  protected $outputUri;

  /**
  * @var string
  *
  *Optional cloud region where annotation should take place
  */
  protected $locationId;

  function __construct(argument)
  {
    # code...
  }
}
 ?>
