# Monzo — Refero Style

- Refero URL: https://styles.refero.design/style/e8a1d114-6924-4f03-acd2-996dd30f15a6
- Site URL: https://monzo.com
- ID: e8a1d114-6924-4f03-acd2-996dd30f15a6
- Theme: light
- Industry: fintech
- Created: 2026-03-20T11:28:18.000Z
- Ranks: newest: 1020, popular: 498, trending: 949

> Hot Coral Digital Craftsmanship — a meticulously crafted digital experience with vibrant accents.

## Description

Monzo's visual style evokes 'Digital Craftsmanship,' where vibrant and professional is achieved through a carefully balanced suite of design choices. The core is a confident yet approachable dark charcoal text against a pristine paper-white background, creating high contrast. This is punctuated by a singular, vivid hot coral for primary calls-to-action and brand accents, preventing the design from feeling sterile. Signature choices like generously rounded 'pill' buttons and soft shadows on cards hint at a user-friendly, empathetic digital experience, while strict adherence to a clean, spacious layout grounds the design in reliability.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Charcoal | #091723 | neutral | Primary text, prominent UI elements, button backgrounds – establishes a deep, authoritative base against light surfaces. |
| Snow White | #ffffff | neutral | Primary background for cards, buttons, and sections – provides a clean, expansive canvas for content. |
| Mist Gray | #f2f8f3 | neutral | Dominant page background, secondary card backgrounds – offers a subtle off-white that prevents harshness and provides relief from pure white. |
| Slate Blue | #112231 | neutral | Accent backgrounds and specific UI elements – a slightly cooler, darker neutral that adds depth. |
| Silver Dust | #e3ebe4 | neutral | Subtle UI backgrounds, dividers – a very light gray providing minimal contrast for separating elements. |
| Steel Gray | #6b747b | neutral | Secondary text, muted links, icons – provides readability for supporting information without competing with primary headings. |
| Ash Gray | #b5b9bd | neutral | Subtle button backgrounds, inactive states – a lighter neutral for less prominent interactive elements. |
| Hot Coral | #ff4f40 | brand | Primary calls-to-action, brand accents, interactive elements – injects energy and guides user attention as a distinct brand identifier. |
| Muted Olive | #3b4c54 | neutral | Tertiary button backgrounds with low prominence – a desaturated, cool color for background functions. |
| Graphite Stroke | #75817 | neutral | Iconography and borders – provides definition to visual elements without being stark black. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| MonzoSansText | Inter, Arial | 400, 600, 700 | 13px, 16px, 20px, 24px, 32px, 36px | 0.81, 1.15, 1.38, 1.40, 1.50 | Body copy, links, navigation, buttons, and general UI text. The uniform letter spacing contributes to a consistent, crisp text block, even at smaller sizes. |
| MonzoSansDisplay | Inter, Arial | 600, 700, 800 | 16px, 20px, 25px, 31px, 39px, 44px, 49px, 61px | 1.00, 1.20, 1.40 | Headlines and prominent display text. Its natural letter spacing ensures headings hold presence without feeling overly tight. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.5 | -0.65 |
| body-sm | 16 | 1.4 | -0.8 |
| body | 20 | 1.38 | -1 |
| subheading | 24 | 1.4 | 0 |
| heading-sm | 32 | 1.15 | -1.6 |
| heading | 36 | 1.15 | -1.8 |
| heading-lg | 49 | 1.2 | 0 |
| display | 61 | 1 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "32px",
    "badges": "4px",
    "buttons": "500px",
    "general": "64px"
  },
  "elementGap": "24px",
  "sectionGap": "64px",
  "cardPadding": "30px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Primary Filled Button

**Role:** Call to action

Solid 'Midnight Charcoal' (#091723) background with 'Snow White' (#ffffff) text, using a 500px border-radius for a pill shape. Padding is 12px vertical, 24px horizontal. Text is MonzoSansText weight 400.

### Primary Outlined Button

**Role:** Secondary action or ghost button

Transparent background with 'Midnight Charcoal' (#091723) text and border. No border-radius, resembling a link. No padding.

### Ghost Button with Icon

**Role:** Navigation or interactive element with subtle styling

Transparent background with 'Steel Gray' (rgba(9, 23, 35, 0.6)) text and border. Uses a 24px border-radius, with 20px padding on all sides. Text is MonzoSansText weight 400.

### Light Mode Card

**Role:** Information container, features

Background 'Snow White' (#ffffff), with a 32px border-radius and a subtle shadow (rgba(0, 0, 0, 0.1) 0px 0px 10px 0px). Inner padding is 30px.

### Dark Mode Card

**Role:** Information container, features

Background 'Slate Blue' (#112231), with a 32px border-radius and a subtle shadow (rgba(0, 0, 0, 0.1) 0px 0px 10px 0px). Inner padding is 30px.

### Section Background Card

**Role:** Hero or large content block backgrounds

Background 'Mist Gray' (#f2f8f3), with a large 64px border-radius and no shadow. Generous vertical padding of 128px.

### Status Badge

**Role:** Informational tag

Background 'Mist Gray' (#f2f8f3) with 'Steel Gray' (rgba(9, 23, 35, 0.6)) text. Rounded 4px corners, 4px vertical, 12px horizontal padding. Text is MonzoSansText weight 400.

## Do's

- Prioritize 'Midnight Charcoal' (#091723) for all primary text and calls-to-action against light backgrounds to ensure AAA contrast.
- Utilize 'Hot Coral' (#ff4f40) exclusively for primary interactive states or brand-specific elements, reserving its impact.
- Implement 500px radius for all primary buttons and interactive pill-shaped elements.
- Apply 'Mist Gray' (#f2f8f3) as the default page background and use 'Snow White' (#ffffff) for distinct content blocks or cards.
- Maintain a clear visual hierarchy by employing MonzoSansDisplay for headlines and MonzoSansText for all body copy and UI elements.
- Ensure all card elements use a 32px border-radius, accompanied by rgba(0, 0, 0, 0.1) 0px 0px 10px 0px shadow for subtle depth.
- Use 24px for all standard element and grid gaps to maintain consistent breathing room between components.

## Don'ts

- Avoid using multiple chromatic colors; 'Hot Coral' (#ff4f40) is the dominant accent hue.
- Do not deviate from the specified typography sizes, line heights, or letter spacings to preserve brand readability and scale.
- Refrain from using hard-edged borders or square elements where a rounded alternative exists, especially for interactive components.
- Do not introduce complex gradient backgrounds; the system relies on solid color blocks and subtle surface variations.
- Avoid excessive shadow layers or high-contrast shadows; only use the specified light shadow for cards.
- Do not use dark backgrounds without contrasting light text; maintain high readability scores for all content.
- Resist using grayscale or desaturated versions of 'Hot Coral' for functional interactions; use it vividly or not at all.

## Layout

The page primarily employs a max-width contained layout, centering content within a 'Mist Gray' (#f2f8f3) canvas, likely around 1200px. The hero section is full-bleed, featuring a dark atmospheric image with central overlay content. Sections maintain a consistent vertical rhythm, primarily defined by the 'sectionGap' of 64px. Content arrangement varies: some sections feature a centered stack, while others use a flexible two-column layout for text and image pairings. There is a clear use of card-based grids for features and information grouping, leveraging the 'Snow White' (#ffffff) and 'Slate Blue' (#112231) surfaces. The navigation is a sticky top bar with clearly segmented 'Personal' and 'Business' options.

## Imagery

The visual language combines expressive full-bleed photography with clean, contained product shots and illustrative elements. Photography features human elements but also focuses on the product (the card). Product imagery is tightly cropped, often showcasing the Hot Coral card against dark, slightly blurred backgrounds. Icons are monoline, 'Graphite Stroke' colored outlines with a moderate stroke weight, used for navigation and feature differentiation. The overall density leans towards balanced, using imagery to establish atmosphere and convey product function without overwhelming text content.

## Elevation

| Element | Style |
| --- | --- |
| Card | rgba(0, 0, 0, 0.1) 0px 0px 10px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Revolut | Shares a fintech aesthetic with strong accent colors against a clean, often light, UI and a clear type hierarchy. |
| Starling Bank | Similar approachable banking feel, using a defined brand color for CTAs and clear, functional design with generous spacing. |
| N26 | Employs a precise, user-centric interface with simple forms, clear typography, and a prominent brand accent color for interactive elements. |
| Wise (formerly TransferWise) | Focuses on clarity and trust through a clean layout, strong text contrast, and the strategic use of a single accent color for calls to action. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Primary Text: #091723
- Background: #f2f8f3
- CTA Button: #ff4f40
- Card Background: #ffffff
- Secondary Text: #6b747b
- Border: #75817e

### Example Component Prompts
1. Create a `Primary Filled Button` with the text 'Sign Up Now'. Use `Midnight Charcoal` background, `Snow White` text, and `500px` radius. Padding 12px vertical, 24px horizontal. Text should be `MonzoSansText weight 400`.
2. Build a `Light Mode Card` containing a headline and a paragraph. Use `Snow White` background, `32px` border-radius, and the card shadow `rgba(0, 0, 0, 0.1) 0px 0px 10px 0px`. Inner padding is `30px`. Headline should be `MonzoSansDisplay size 39 weight 700`, paragraph `MonzoSansText size 16 weight 400` with `Steel Gray` text.
3. Design a hero section background using the `Section Background Card` variant (`Mist Gray` background, `64px` border-radius, 128px vertical padding). Overlay a `MonzoSansDisplay size 61 weight 800` headline in `Midnight Charcoal`, and a `MonzoSansText size 20 weight 400` body text in `Midnight Charcoal`.
4. Create a `Status Badge` with the text 'New Feature'. Use `Mist Gray` background, `Steel Gray` text, `4px` border-radius, and `4px` vertical, `12px` horizontal padding. Text is `MonzoSansText weight 400`.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776105425770-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776105425770-thumb.jpg |
