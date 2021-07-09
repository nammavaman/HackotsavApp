import boto3
from boto3.dynamodb.conditions import Key

def lambda_handler(event, context):
    dynamodb = boto3.resource('dynamodb')
    
    table = dynamodb.Table('ProjectDetails')
    
    resp = table.scan(ProjectionExpression="Project_ID, Budget, Manpower, ProjectStage, Tools, Vehicles")
    
    items = resp['Items']
    return {"statusCode": 200, "body": items}