# Strava — Refero Style

- Refero URL: https://styles.refero.design/style/efdd6d8f-4488-4312-86a7-4ee8e016c83a
- Site URL: https://strava.com
- ID: efdd6d8f-4488-4312-86a7-4ee8e016c83a
- Theme: light
- Industry: other
- Created: 2026-01-17T12:25:05.000Z
- Ranks: newest: 1307, popular: 297, trending: 364

> Athletic Orange Highlight

## Description

This design system projects an active, performance-oriented energy with its high-contrast typography and prominent use of a single, vibrant orange. The stark black text against white or near-white backgrounds, combined with structured, rectangular forms defines its modern utility. The orange acts as a constant visual cue, highlighting interactive elements and brand presence without relying on subtle gradations or complex color palettes, focusing instead on direct and clear communication.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, critical body copy, dark icons, default button borders. Creates strong contrast on light backgrounds. |
| Cloudburst Gray | #43423f | neutral | Secondary text, link hover states, subheadings. Provides readability while subtly softening the intensity of Midnight Ink. |
| Ash Charcoal | #21211f | neutral | Darker secondary text, button text on light interaction, subtle borders. A deep nearly-black that offers slight variation from Midnight Ink. |
| Whisper White | #ffffff | neutral | Page backgrounds, card surfaces, button backgrounds. The primary backdrop for content. |
| Summit Cream | #f9f8f5 | neutral | Subtle background sections, footer background. Offers a warm, off-white alternative to Whisper White to delineate structural areas. |
| Pebble Gray | #e0e0de | neutral | Light button borders, dividers. A very light gray for subtle structural definitions. |
| Strava Orange | #fc5200 | brand | CTA buttons, primary links, active navigation items, brand accents. This vivid orange is the sole chromatic brand identifier, drawing immediate attention to key interactions. |
| Link Blue | #0060d0 | semantic | Informational links (e.g., legal text). Differentiated from Strava Orange for non-primary actions. |
| Google Red | #ea4335 | accent | Google icon brand color, not a general semantic red. |
| Google Green | #34a853 | accent | Google icon brand color, not a general semantic green. |
| Google Blue | #4285f4 | accent | Google icon brand color, not a general semantic blue. |
| Google Yellow | #fbbc05 | accent | Google icon brand color, not a general semantic yellow. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Boathouse | Inter | 400 | 12px, 14px, 15px, 16px, 32px | 1.00, 1.20, 1.29, 1.30, 1.33, 1.50 | Body text, links, navigation items, footer text, button text. This primary typeface handles all non-heading content, providing a clear and functional voice. |
| Boathouse | Inter | 600 | 12px, 14px, 15px, 16px, 32px | 1.00, 1.20, 1.29, 1.30, 1.33, 1.50 | Headlines and prominent calls to action. The heavier weight at larger sizes creates a strong focal point without overpowering. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body-sm | 14 | 1.33 |  |
| display | 32 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "4px",
    "buttons": "4px",
    "input_fields": "4px"
  },
  "elementGap": "",
  "sectionGap": "",
  "cardPadding": "",
  "pageMaxWidth": null
}
```

## Components

### Sign Up Form Card



### Button Group Showcase



### Stat / Feature Banner



### Primary CTA Button

**Role:** Main call to action

Solid Strava Orange background (#fc5200) with Whisper White text (#ffffff), 4px border-radius. Padding: 10px top/bottom, 50px left/right. Uses Boathouse Bold for text.

### Secondary Outline Button (Social)

**Role:** Alternative login/signup

Summit Cream background (#f9f8f5 - inferred from screenshot), Ash Charcoal text (#21211f), and Pebble Gray border (#e0e0de) at 4px border-radius. Padding: 10px top/bottom, 50px left/right. Accommodates social icons.

### Ghost Button (Header)

**Role:** Navigation, secondary actions

Transparent background, Midnight Ink text (#000000) or Cloudburst Gray (#43423f), no explicit border, 4px border-radius. Minimal padding, emphasis on text.

### Footer Link

**Role:** Navigational links in footer

Uses Cloudburst Gray text (#43423f) for default, with an inferred Strava Orange (#fc5200) hover/active state. No background or border.

### Navigation Link

**Role:** Primary site navigation

Uses Midnight Ink text (#000000) for default, with an inferred Strava Orange (#fc5200) for active/hover. No background or border.

### Form Card

**Role:** Content container for forms

Whisper White background (#ffffff), 4px border-radius. Contains heading, body text, and multiple button components. Inferred padding around internal elements.

## Do's

- Prioritize Strava Orange (#fc5200) for all primary calls to action and active states.
- Maintain high contrast by using Midnight Ink (#000000) or Ash Charcoal (#21211f) text on Whisper White (#ffffff) or Summit Cream (#f9f8f5) backgrounds.
- Apply a consistent 4px border-radius to all interactive elements like buttons and input fields.
- Use Boathouse (or Inter) weight 600 for all main headings (32px), ensuring clear hierarchy.
- Separate content sections with distinct background colors, such as Whisper White (#ffffff) for main content and Summit Cream (#f9f8f5) for footers.

## Don'ts

- Do not introduce new primary accent colors other than Strava Orange (#fc5200) or Link Blue (#0060d0).
- Avoid using soft, low-contrast text-on-background combinations; maintain AAA or AA contrast ratios.
- Do not deviate from the 4px border-radius on buttons and input fields to maintain visual consistency.
- Do not use generic system fonts; leverage Boathouse (or Inter) for all text elements.
- Do not use box-shadow for elevation; rely on background color changes and borders to define hierarchy and separation.

## Layout

The page uses a centered, quasi-full-bleed model, with a wide central content area that appears contained on larger screens but feels expansive. The hero section is a prominent three-column split: large, emotive photography on the left, a central, white form card for sign-up, and a product-in-context shot on the right, creating an immediate narrative. Sections are distinct blocks, with no alternating background bands visible. Content is generally stacked vertically within these blocks, or aligned within columns (e.g., footer grid). The navigation is a classic horizontal top bar, sticky (inferred), with a simple `Log In` button. The overall density is comfortable, with ample padding around elements and sections, suggesting a focus on clarity rather than information density.

## Imagery

The visual language combines aspirational, real-world photography of athletes in action with clean, functional UI elements. Photography features vibrant outdoor scenes (cyclists, runners) with a natural, un-staged feel, emphasizing movement and community. Imagery is primarily full-bleed or large background elements, without masks or heavy treatments, allowing the scenes to speak for themselves. Product screenshots are integrated to explain functionality, often with overlaid path graphics or app UI. Icons are simple, filled, and monochrome, with an apparent medium stroke weight when outlined (logo). The overall density is balanced, allowing imagery to dominate sections while text remains concise.

## Similar Brands

| Business | Why |
| --- | --- |
| Garmin Connect | Athletic brand with functional, high-contrast UI and a strong accent color against a clean white background. |
| Nike Training Club | Focus on activity and performance, utilitarian layout, and strong emphasis on clear call-to-actions with a single brand color. |
| AllTrails | Outdoor activity focus, clean light theme, and use of a prominent accent color (green) for interactive elements. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
- Text (Primary): #000000
- Background (Page): #ffffff
- CTA (Orange): #fc5200
- Border (Light): #e0e0de
- Accent (Brand): #fc5200

**Example Component Prompts:**
1. Create a primary CTA button: background #fc5200, text #ffffff, border-radius 4px, padding 10px 50px. Text 'Sign Up With Email' using Boathouse weight 600, 16px.
2. Develop a social login button: background Whisper White #ffffff, text Ash Charcoal #21211f, border #e0e0de, border-radius 4px, padding 10px 50px. Add a Google logo to the left. Text 'Sign Up With Google' using Boathouse weight 400, 16px.
3. Design a main header navigation link: text Midnight Ink #000000, Boathouse weight 400, 16px. Name it 'Features'.
4. Generate a section headline: text Midnight Ink #000000, Boathouse weight 600, 32px, line-height 1.2. Content: 'Community-Powered Motivation'.
5. Create body text with an embedded link: text Cloudburst Gray #43423f, Boathouse weight 400, 15px. Link text 'Terms of Service' in Link Blue #0060d0.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924563923-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924563923-thumb.jpg |
