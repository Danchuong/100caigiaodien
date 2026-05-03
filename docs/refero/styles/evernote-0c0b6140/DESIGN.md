# Evernote — Refero Style

- Refero URL: https://styles.refero.design/style/0c0b6140-2b6c-44f8-8bba-4ecfcadba420
- Site URL: https://evernote.com
- ID: 0c0b6140-2b6c-44f8-8bba-4ecfcadba420
- Theme: light
- Industry: productivity
- Created: 2026-04-30T00:53:00.105Z
- Ranks: newest: 674, popular: 717, trending: 497

> Calm workspace, grounded neutrals

## Description

Evernote projects a calm, confident workspace aesthetic with an off-white canvas and muted neutral surfaces. Typography is grounded and readable, while a single vibrant green accent provides functional punctuation for primary actions and key highlights. Interaction elements are lightweight but clearly defined, emphasizing clarity and focus over heavy ornamentation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas | #f9f6f2 | neutral | Page backgrounds, large content sections — provides a warm, inviting default background |
| Surface Off-White | #f4eee5 | neutral | Secondary surface background, subtle visual separation from the main canvas |
| Pure White | #ffffff | neutral | Component backgrounds, elevated cards, and feature blocks — creates visual lift and contrast |
| Vivid Evernote Green | #94e130 | brand | Green action color for filled buttons, selected navigation states, and focused conversion moments |
| Midnight Graphite | #141414 | neutral | Primary text, prominent headings, main interactive button backgrounds |
| Deep Black | #000000 | neutral | Dominant text for high contrast, occasionally used for button borders and fills |
| Carbon Gray | #262626 | neutral | Secondary text, subheadings, and more subdued body copy |
| Medium Gray | #4e4d4c | neutral | Tertiary text, descriptive labels, and supporting information |
| Muted Silver | #a1a1a1 | neutral | Inactive interface elements, subtle borders for ghost buttons and dividers |
| Light Gray Stroke | #e7e7e7 | neutral | Subtle borders for cards and input fields, indicating containment without heaviness |
| Soft Gray | #737373 | neutral | Lowest contrast text, legal notices, and minor descriptive elements |
| Decorative Violet | #000015 | accent | Violet decorative accent for icons, marks, and small graphic details. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Figtree | Inter | 300, 400, 500, 600 | 8px, 12px, 13px, 14px, 16px, 18px, 20px, 24px, 40px, 50px, 72px | 1.00, 1.10, 1.20, 1.30, 1.40, 1.50, 1.60 | Primary typeface for all page elements; its geometric yet friendly character supports both headlines and body text. The tight letter spacing for display sizes gives it a modern, efficient feel, while slight positive spacing for captions maintains readability. |
| Inter | system-ui | 400, 600 | 16px, 20px | 1.30, 1.50 | Secondary typeface, primarily for body text, providing a highly legible and versatile option that complements Figtree without competing for attention. Tighter letter spacing indicates a functional, dense information layout. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.5 |  |
| subheading | 18 | 1.3 |  |
| heading-sm | 24 | 1.3 |  |
| heading | 40 | 1.2 | -0.48 |
| heading-lg | 50 | 1.1 | -0.75 |
| display | 72 | 1 | -1.08 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "10px",
    "buttons": "5px",
    "circular": "52px",
    "largeCards": "16px"
  },
  "elementGap": "8px",
  "sectionGap": "32px",
  "cardPadding": "32px",
  "pageMaxWidth": "1320px"
}
```

## Components

### Primary Filled Button

**Role:** Call to action

Filled with Vivid Evernote Green (#94e130), with Pure White (#ffffff) text. Features 5px border radius and generous 16px vertical, 40px horizontal padding for prominence.

### Secondary Filled Button

**Role:** Secondary call to action

Filled with Midnight Graphite (#141414), with white text if on a dark background or Deep Black (#000000) text if on a light background. Features 5px border radius and 10px vertical, 28px horizontal padding.

### Ghost Text Button

**Role:** Tertiary action or navigation link

Transparent background, Deep Black (#000000) text. Minimal padding (0px vertical, 6px horizontal) and no border radius to appear as a discrete text link.

### Primary Feature Card

**Role:** Content container

Pure White (#ffffff) background, 10px border radius, no box shadow, 32px padding on all sides. Used for showcasing main features or grouped content.

### Secondary Content Card

**Role:** Informational container

Surface Off-White (#f4eee5) background, with a prominent 16px border radius, no box shadow. Used for larger, illustrative content blocks with substantial top padding (80px) and side padding (40px).

### Muted Navigation Link

**Role:** Navigation items

Deep Black (#000000) text on transparent background, no border radius, 10px vertical and 28px horizontal padding. Muted Silver (#a1a1a1) for inactive states.

## Do's

- Prioritize text legibility by using Midnight Graphite (#141414) or Deep Black (#000000) for primary content on light backgrounds like Canvas (#f9f6f2) or Pure White (#ffffff).
- Use Vivid Evernote Green (#94e130) exclusively for primary calls to action or key interactive states to maintain its impact and clarity.
- Apply 5px border radius for interactive elements like buttons and navigation items to give them a soft, approachable geometry.
- Maintain a clear content hierarchy using Figtree for all typographic elements, with display sizes (72px, 50px) using negative letter-spacing for impact.
- Segment content using distinct background colors: Canvas (#f9f6f2) for the main page, Pure White (#ffffff) for elevated cards, and Surface Off-White (#f4eee5) for secondary sections.
- Utilize an 8px base unit for all spacing values, ensuring consistent rhythm and density across layouts and components.
- Employ Light Gray Stroke (#e7e7e7) for all hairline borders and subtle dividers, maintaining a lightweight interface feel.

## Don'ts

- Do not introduce new saturated colors; limit accents to Vivid Evernote Green (#94e130) with occasional Decorative Violet (#000015) for non-interactive elements.
- Avoid heavy drop shadows or complex gradients on cards; the system relies on background color shifts and solid borders for surface separation.
- Do not use letter-spacing on body text; it should remain at its default for optimal readability.
- Do not use Pure White (#ffffff) as a background for direct page sections; it's reserved for contained components like cards to appear elevated.
- Do not vary border radii arbitrarily; stick to 5px for interactive elements, 10px for standard cards, and 16px for larger feature cards.
- Avoid dense, information-heavy blocks without sufficient padding; use 32px padding for cards and sections to ensure comfortable breathing room.
- Do not introduce unnecessary iconography that distracts from core content; icons should be functional and simple, often with a subtle color accent.

## Layout

The page adheres to a max-width 1320px centered container for main content, often bordered by the Canvas (#f9f6f2) background. Hero sections frequently feature a centered headline and description over either a full-bleed dark background with blurred abstract shapes or the primary Canvas (#f9f6f2). Section rhythm often alternates between the Canvas (#f9f6f2) and Surface Off-White (#f4eee5) backgrounds. Content is frequently arranged in multi-column grids or side-by-side text-and-image blocks. A prominent 3-column card grid is used for feature showcases. The navigation is a sticky top bar with clearly segmented interactive elements.

## Imagery

The site predominantly uses product screenshots within a simulated user interface, often presented on Pure White (#ffffff) cards to highlight functionality. Photography is minimal, mostly focused on business-oriented people in work settings. Illustrations are abstract and atmospheric, characterized by blurred, multi-colored organic shapes that serve as decorative background elements, particularly in hero sections, rather than conveying specific meaning. Icons are outlined, simple, and functional, occasionally with a fill in Vivid Evernote Green (#94e130) or other brand-related colors for clarity. Imagery largely serves to showcase product features and create a professional, contemporary atmosphere.

## Similar Brands

| Business | Why |
| --- | --- |
| Notion | Clear, focused UI with a strong emphasis on content, minimal decorative elements, and functional use of color accents. |
| Todoist | Predominantly light theme, clean typography, system-like component styling, and a single accent color for primary actions. |
| Slack (light theme) | Off-white default canvas, highly readable text, and a distinct brand color used to highlight interactive elements and states. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #262626
background: #f9f6f2
border: #e7e7e7
accent: #000015
primary action: #94e130 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #94e130 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a feature card: Pure White (#ffffff) background, 10px border-radius, Light Gray Stroke (#e7e7e7) 1px border. Inside, use a heading 'Template' (Figtree weight 600, 24px, Midnight Graphite #141414) and body text 'Get further faster...' (Figtree weight 400, 14px, Deep Black #000000). Apply 32px padding on all sides.
3. Implement a main hero section heading: 'Your second brain' using Figtree weight 600, 72px, Midnight Graphite (#141414), letter-spacing -1.08px. Follow with a sub-headline 'Remember everything...' Figtree weight 400, 18px, Carbon Gray (#262626).
4. Create a secondary content card: Surface Off-White (#f4eee5) background, 16px border-radius. Padding 80px top, 40px left and right, 0px bottom. This card will contain a heading (Figtree weight 600, 40px, Midnight Graphite #141414) and secondary text (Figtree weight 400, 16px, Carbon Gray #262626).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510356673-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510356673-thumb.jpg |
