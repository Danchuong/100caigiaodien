# Ghost — Refero Style

- Refero URL: https://styles.refero.design/style/532b3211-cca9-4207-a11c-812cfabc1a73
- Site URL: https://ghost.org
- ID: 532b3211-cca9-4207-a11c-812cfabc1a73
- Theme: light
- Industry: saas
- Created: 2026-02-06T18:15:16.000Z
- Ranks: newest: 1223, popular: 370, trending: 946

> Crisp Blueprint on White Canvas. Black text etched onto a pristine white background, punctuated by a vibrant lime green flourish.

## Description

This design system grounds a clean, light interface with judicious dark elements, creating a sense of professional authority. A stark contrast between near-black text and a bright white background establishes immediate readability, while subtle, desaturated grays provide tiered information. The vivid lime green is reserved for primary calls to action, standing out against the neutral palette like a beacon. The interplay of sharp, functional typography with soft, rounded elements, especially in buttons, creates a balanced, approachable feel without sacrificing precision.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| White Canvas | #ffffff | neutral | Page backgrounds, card surfaces, pristine backdrops for content. |
| Midnight Ink | #000000 | neutral | Primary text across light backgrounds, creating strong contrast for headlines and body content. |
| Carbon Black | #15171a | neutral | Background for deeply embedded components, like the main UI elements shown in the dashboard example, acting as a secondary, darker surface. |
| Slate Blue | #94a3b8 | neutral | Secondary text, link hovers, subtle borders, and placeholder text, providing visual hierarchy without harshness. |
| Graphite | #334155 | neutral | Tertiary text, less prominent UI elements, and occasional darker backgrounds for specific content blocks. |
| Ash Gray | #e5e7eb | neutral | Subtle borders, dividers, subtle button backgrounds, and UI element outlines, providing structure without distraction. |
| Light Steel | #cbd5e1 | neutral | Iconography and less prominent textual elements, contributing to the system's light aesthetic. |
| Dark Steel | #112220 | neutral | Prominent headings and critical interface labels within darker sections, almost black but with a very subtle green undertone. |
| Ghost Gray | #0f172a | neutral | Darker component backgrounds, especially in the featured UI example, providing depth to the otherwise light theme. |
| Ghost Border | #1f2937 | neutral | Darker borders and separators, primarily used within the embedded dark UI, providing definition to interactive elements. |
| Vivid Lime | #d1ff19 | brand | Primary call-to-action buttons and key interactive elements, drawing immediate attention with its high contrast. |
| Muted Lime | #bef264 | brand | Subtle hover states or secondary interactive elements, a softer tone of the brand's primary accent. |
| Forest Green | #1a2e05 | accent | Background for secondary action buttons, providing a more subdued but still on-brand interactive element. |
| Sky Blue | #1bb6eb | accent | Accent color for specific interactive components, like the 'Get Started — free' secondary button, offering a crisp alternative to lime. |
| Neon Pink | #f8b1e2 | accent | Decorative elements or indicators within the embedded dark UI, providing a vibrant, almost electric pop against dark backgrounds. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| InterVariable | Inter | 400, 500, 600 | 12px, 14px, 15px | 1.25, 1.50 | Body copy, button labels, navigation links, and descriptive text. Its versatility ensures readability across various functional elements. |
| InterDisplay | Inter | 400, 500, 600, 700 | 12px, 15px, 18px, 20px, 24px, 36px, 48px, 72px, 96px | 0.90, 1.00, 1.15, 1.25, 1.35, 1.50 | Headlines, section titles, and prominent calls-to-action. The tighter line height and varied letter spacing create a precise, impactful display type. The range of weights allows for a nuanced hierarchy, from assertive headings to more understated but still prominent display text. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.5 |  |
| subheading | 18 | 1.25 |  |
| heading | 24 | 1.25 |  |
| heading-lg | 36 | 1.15 |  |
| display | 48 | 1 | -0.48 |
| display-lg | 72 | 0.9 |  |
| display-xl | 96 | 0.9 |  |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "9999px",
    "cards": "8px",
    "input": "6px",
    "buttons": "24px"
  },
  "elementGap": "16px",
  "sectionGap": "64px",
  "cardPadding": "24px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Informational Badge + Hero CTA



### Dashboard Stat Block



### Revenue Stat Banner



### Primary Call-to-action Button

**Role:** Main interactive element

Filled with Forest Green (#1a2e05), text in Muted Lime (#bef264), 8px border-radius, 8px vertical padding, 16px horizontal padding. Delivers a bold, on-brand interactive experience.

### Secondary Outline Button

**Role:** Subtle interactive element

Transparent background, text in #4d4d4d, 6px border-radius, 0px vertical and horizontal padding. Used for less prominent calls to action or navigation. Subtle shadows indicate interactability.

### Solid Dark Button

**Role:** Tertiary action, often within dark contexts

Filled with Carbon Black (#15171a), text in White Canvas (#ffffff), 6px border-radius, 8px vertical padding, 16px horizontal padding. Provides a clear action point on lighter backgrounds.

### Sky Blue Pill Button

**Role:** Prominent secondary action for specific features

Filled with Sky Blue (#1bb6eb), text in Midnight Ink (#000000), 24px border-radius, 12px vertical and horizontal padding. Its distinct color and shape highlight special offers or actions.

### Informational Badge

**Role:** Contextual labels or status indicators

Pill-shaped with a 9999px border-radius. Example: 'Just launched: Ghost 6.0 →' badge with Vivid Lime (#d1ff19) background and Midnight Ink (#000000) text, 8px padding.

### Feature Card

**Role:** Content container for features or services

White Canvas (#ffffff) background, 8px border-radius, subtle shadow rgba(0, 0, 0, 0.1) 0px 0px 1px 0px, 24px internal padding. Contains images, headlines, and body text.

### Navigation Link

**Role:** Primary site navigation

Midnight Ink (#000000) text (InterVariable, weight 400, 15px), 0px padding, no background. Hover states are implied to change text color to Slate Blue (#94a3b8) or similar subtle shift.

### Dashboard UI Panel

**Role:** Embedded complex interface element

Ghost Gray (#0f172a) background, with Ghost Border (#1f2937) for internal divisions. Text in Midnight Ink or appropriate neutrals. Features intricate data visualization and functional navigation within.

## Do's

- Use Midnight Ink (#000000) for all primary body and headline text on White Canvas (#ffffff) backgrounds to ensure maximum contrast (21.0:1 AAA).
- Apply Vivid Lime (#d1ff19) exclusively for primary calls-to-action and key indicators, reserving its high visual impact.
- Maintain the 24px border-radius for all primary buttons and significant interactive elements for a consistent soft-edged aesthetic.
- Utilize InterDisplay for headlines at sizes 36px and above, with letter-spacing adjusted between -0.025em and normal for optimal legibility.
- Ensure a minimum vertical spacing of 24px between content blocks and 16px for element gaps to maintain a comfortable density.
- Employ the rgba(0, 0, 0, 0.1) 0px 0px 1px 0px, rgba(0, 0, 0, 0.03) 0px 2px 6px 0px shadow for interactive cards and buttons to provide subtle depth.

## Don'ts

- Do not use highly saturated colors for large areas or non-interactive elements; colors beyond the defined brand/accent palette will appear off-brand.
- Avoid deviating from the defined InterVariable and InterDisplay font families; no other fonts should be introduced.
- Refrain from using shadows or borders that are more pronounced than those defined (e.g., rgba(0, 0, 0, 0.25) 0px 25px 50px -12px is reserved for highly elevated, transient elements like modals or dropdowns).
- Do not mix border-radius values indiscriminately; stick to 24px for buttons, 8px for cards, and 9999px for pill-shaped elements.
- Do not use generic gray values; always refer to the specific neutral palette (Slate Blue, Graphite, Ash Gray, Light Steel, Dark Steel, Ghost Gray) to maintain subtle chromatic tint and consistency.
- Do not use a line height greater than 1.5 for any text block, as this design favors a compact, focused presentation.

## Layout

The site uses a max-width contained layout, typically centered around 1200px. The hero section is a full-width presentation with a prominent, large headline in Midnight Ink against a White Canvas background, flanked by a smaller, informational badge. Directly below the hero is a large, dark-themed screenshot of the product's dashboard UI, contrasting sharply with the light page background, effectively showcasing the product. Subsequent sections follow a clean, structured pattern, alternating between full-width content blocks and more contained sections, often using a single-column stack for text information, creating a clear and focused content flow. The navigation is a fixed top bar with simple text links and a distinct 'Get Started' button.

## Imagery

The visual language focuses on clear product demonstration, particularly through embedded UI screenshots. There are no lifestyle photos; instead, the site uses tight, contained screenshots of its own interface (like the dashboard) to directly showcase functionality. These are presented with sharp, unmasked edges. Additionally, there are branded icons from popular integrations, rendered as contained white squares with rounded corners, providing a sense of seamless connectivity. Imagery is functional and explanatory rather than decorative, occupying significant visual space to underscore product capability, but always within a structured layout.

## Elevation

| Element | Style |
| --- | --- |
| Card/Button subtle shadow | rgba(0, 0, 0, 0.1) 0px 0px 1px 0px, rgba(0, 0, 0, 0.03) 0px 2px 6px 0px |
| Medium elevation (e.g., dropdowns, tooltips) | rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px |
| Hover/Active element elevation | rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px |
| Modal/Prominent Overlay | rgba(0, 0, 0, 0.25) 0px 25px 50px -12px |

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Shares a clean, high-contrast light UI with a strong focus on typography and subtle use of brand colors for interactive elements. |
| Linear | Exhibits a similar approach to integrated dark UI elements (like a dashboard) within a predominantly light-themed page, maintaining clarity and function. |
| Notion | Employs an extensive system of neutrals for hierarchy and a very limited palette of accent colors for key actions, paired with sharp, functional typography. |
| Vercel | Features a light, spacious layout punctuated by dark UI components, particularly for code or application interfaces, emphasizing product capability over aesthetic flourish. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (Primary): #000000
- Background (Primary): #ffffff
- CTA (Primary): #d1ff19
- Border (Subtle): #e5e7eb
- Link/Secondary Text: #94a3b8
- Dark UI Surface: #15171a

### Example Component Prompts
1. Create a hero section: White Canvas background. Headline 'Turn your audience into a business.' using InterDisplay, weight 700, 48px, line-height 1.0, letter-spacing -0.48px, Midnight Ink text. Add an 'Informational Badge' above the headline: Vivid Lime background, Midnight Ink text 'Just launched: Ghost 6.0 →', 9999px radius, 8px padding. Center align all content.
2. Create a Primary Call-to-action Button: Text 'Get Started — free', with Forest Green background, Muted Lime text, InterVariable weight 600, 15px, line-height 1.25, 8px radius, 8px vertical padding, 16px horizontal padding. Apply the subtle card shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px 0px, rgba(0, 0, 0, 0.03) 0px 2px 6px 0px.
3. Create a Navigation Link: Text 'Product', Midnight Ink color, InterVariable weight 400, 15px, line-height 1.25, with no background or padding. Ensure it is vertically central within a 94px tall header.
4. Create a Feature Card: White Canvas background, 8px radius, 24px padding. Headline 'Easy site design' using InterDisplay, weight 600, 24px, line-height 1.25, Dark Steel text. Body text 'Launch a custom website and tweak the design settings to perfectly match your brand and style.' using InterVariable, weight 400, 15px, line-height 1.5, Graphite text. Apply the subtle card shadow.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924729065-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924729065-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/532b3211-cca9-4207-a11c-812cfabc1a73-1777560986948-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/532b3211-cca9-4207-a11c-812cfabc1a73-1777560986948-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/532b3211-cca9-4207-a11c-812cfabc1a73-1777560986948-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/532b3211-cca9-4207-a11c-812cfabc1a73-1777560986948-preview-detail-poster.jpg |
