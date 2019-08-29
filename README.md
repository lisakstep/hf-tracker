# hf-tracker
## Purpose of the app
Provide a way to record a daily weight then show the gain/loss over the last day and the last week.
Patients with heart failure are often asked to track their weight daily and call their doctor if they 
gain more than two pounds in a day or 5 pounds over the course of a week. 

## What does the app do?
This app allows a user to enter a weight in pounds and then displays the change from one day ago 
and from seven days ago with color coding to indicate whether the change is within the guidelines (green) 
or exceeds the guidelines (red).

## Why did I make this?
### Because the purpose is important to me
Someone close to me has been diagnosed with heart failure. When a person is diagnosed with this condition, 
they often have
many new challenges to manage in their lives such as diet changes, new medications and associated schedules, 
and multiple
on-going visits to health care professionals. I intended this app to make it easier to know when to call a health 
practitioner based on weight change.
### Because I wanted to learn to use Laravel
I have been a software engineer for about five years. My professional stack has been Angular, PHP, SQL and I 
dabbled with Ruby on Rails when I was first learning. I enjoy PHP and wanted to explore Laravel and see
what I could do with it.

## Still TODO
- Add testing
- Expand data validation and error feedback messaging
- Enforce entry of only one weight per day
- Allow updating of the current day weight value

## Possible extensions
- Accept weight in kilograms and use appropriate threshholds
- Display a graph of weight over time
- Cache data on retrieval
- Implement user login
- Allow multiple users
