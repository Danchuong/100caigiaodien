# Cycle — Refero Style

- Refero URL: https://styles.refero.design/style/3677bc04-7461-4aa4-aec7-5291bac41b0b
- Site URL: https://cycle.app
- ID: 3677bc04-7461-4aa4-aec7-5291bac41b0b
- Theme: light
- Industry: other
- Created: 2026-02-18T14:54:49.000Z
- Ranks: newest: 1166, popular: 150, trending: 130

> Digital Sandbox with Soft Precision. Elements feel like organized, approachable blocks, gently elevated within a bright, open space.

## Description

Cycle's design system creates a playful yet precise atmosphere, reminiscent of a digital sandbox where complex data is handled with accessible clarity. Soft, rounded elements and a palette of muted pastels with distinct, primary-adjacent accents define its visual identity. Typography combines the clean readability of Inter with the structured presence of Eudoxus Sans, creating a friendly and intelligent feel, while a subtle elevation strategy ensures content hierarchy without visual noise.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Black | #171618 | neutral | Primary text, prominent buttons, critical UI elements. It anchors the light theme with a strong, deep presence. |
| Paper White | #ffffff | neutral | Page backgrounds, card surfaces, button text. Provides a clean, crisp canvas for all content. |
| Graphite | #727578 | neutral | Secondary text, navigation links, subtle borders. Offers softer contrast for less critical information. |
| Light Gray | #f7f7f7 | neutral | Subtle background shading, alternate rows, light borders. Used for slight visual separation and depth. |
| Silver Mist | #efefef | neutral | Input field backgrounds, dividers. Provides a light, non-intrusive separator. |
| Slate Border | #dadada | neutral | Non-interactive button and input borders. Suggests containment without demanding attention. |
| Feedback Violet | #38296c | brand | Active states, key indicators, interactive elements related to feedback management. It's a deep, rich hue providing a premium feel. |
| Agent Blue | #004d60 | brand | Highlight elements for 'smart' features or agents, and specific interactive icons. A deep, intellectual blue. |
| Insight Amber | #6c4800 | brand | Elements related to insights or discovery. A warm, earthy tone that signals value. |
| Pale Lilac | #f5f0ff | accent | Soft background fill for cards or sections, particularly those highlighting violet brand elements. |
| Cloud Blue | #defafe | accent | Light background fill for cards or sections, complementing blue brand elements. |
| Mellow Apricot | #fff6e1 | accent | Gentle background fill for cards or sections, tying into amber brand elements. |
| Soft Lavender | #e7e0fe | accent | Background for badges or themed cards related to violet brand elements. |
| Sky Tint | #cfeff8 | accent | Background for badges or themed cards related to blue brand elements. |
| Sun Mist | #feedcc | semantic | Background for badges or themed cards related to amber brand elements. Also appears as a warning state. |
| Illustrative Yellow | #ffbd00 | accent | Used for specific, vivid accents within illustrations and decorative elements, injecting energy. |
| Illustrative Violet | #6386fe | accent | Used for specific, vivid accents within illustrations and decorative elements, adding a playful pop. |
| Illustrative Pink | #fd8fe9 | accent | Used for specific, vivid accents within illustrations and decorative elements, contributing to a vibrant feel. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 500, 600 | 12px, 13px, 14px, 15px, 16px, 21px, 27px | 0.94, 1.00, 1.18, 1.20, 1.40, 1.62, 1.74 | Primary UI font for body text, navigation, buttons, and badges. Its high legibility and moderate width ensure clarity across all interactive and informative text. |
| Eudoxus Sans | Arial, sans-serif | 700, 800 | 21px, 23px, 32px, 48px, 58px | 1.00, 1.05, 1.20, 1.27, 1.40 | Display font for headings and prominent titles. Its bold weights and tight letter spacing create a strong, modern statement that demands attention without being overtly loud. |
| Karla | system-ui, sans-serif | 400 | 21px | 1.40 | Used sparingly for specific informational text, possibly to create a subtle textual distinction. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| heading | 21 | 1.4 | -0.63 |
| heading-lg | 23 | 1.2 | -0.67 |
| display | 48 | 1.05 | -1.39 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "20px",
    "badges": "100px",
    "inputs": "8px",
    "buttons": "10px"
  },
  "elementGap": "16px",
  "sectionGap": "64px",
  "cardPadding": "22px",
  "pageMaxWidth": "1447px"
}
```

## Components

### Button Group



### Product Agent Cards



### Feedback Quote Card



### Primary Action Button

**Role:** Call to action

Solid button with `Absolute Black` background, `Paper White` text, and `10px` border radius. Padding: `12px` vertical, `16px` horizontal. e.g., 'Book a demo'

### Secondary Action Button

**Role:** Call to action

Outlined button with `Paper White` background, `Absolute Black` text, and a `1px` border of `rgba(25, 23, 23, 0.16)`. Padding: `12px` vertical, `16px` horizontal. Radius: `10px`. e.g., 'Watch video'

### Tertiary Navigation Button

**Role:** Navigation/secondary interaction

Ghost button with transparent background, `Graphite` text, and `9px` border radius. Padding: `8px` vertical, `16px` horizontal. Has a `1px` border of `Graphite`. e.g., 'Explore product agents'

### Minimal Navigation Link

**Role:** Subtle navigation

Invisible button with transparent background, `Graphite` text, and `9px` border radius. No vertical padding; `12.4px` horizontal padding. No visible border. e.g., 'Log in'

### Round Accent Card - Violet

**Role:** Decorative feature highlight

Circular card for decorative purposes, with `Pale Lilac` background and `50%` (`20px` effectively) border radius. No box shadow or padding.

### Round Accent Card - Blue

**Role:** Decorative feature highlight

Circular card for decorative purposes, with `Cloud Blue` background and `50%` (`20px` effectively) border radius. No box shadow or padding.

### Round Accent Card - Amber

**Role:** Decorative feature highlight

Circular card for decorative purposes, with `Mellow Apricot` background and `50%` (`20px` effectively) border radius. No box shadow or padding.

### Primary Pill Badge - Violet

**Role:** Categorization/Tagging

Pill-shaped badge with `Soft Lavender` background, `Feedback Violet` text, and `100px` border radius. No explicit padding detected, but implies tight fit for text.

### Primary Pill Badge - Blue

**Role:** Categorization/Tagging

Pill-shaped badge with `Sky Tint` background, `Agent Blue` text, and `100px` border radius. No explicit padding detected.

### Primary Pill Badge - Amber

**Role:** Categorization/Tagging

Pill-shaped badge with `Sun Mist` background, `Insight Amber` text, and `100px` border radius. No explicit padding detected.

### Ghost Badge - Neutral

**Role:** Subtle categorization

Transparent background badge with `Grayed Text` text, no border radius, and no padding. Used for less prominent tags or statuses.

### Product Agent Card

**Role:** Feature showcase

Cards showcasing product agents have a `20px` border radius and backgrounds matching accent colors (`Soft Lavender`, `Sky Tint`, `Sun Mist`). Text is `#38296c` (Feedback Violet), `#004d60` (Agent Blue), or `#6c4800` (Insight Amber) respectively.

## Do's

- Use `Eudoxus Sans` `weight 700` and `800` set with negative letter spacing for all primary headings and display text to enforce a deliberate, structured feel.
- Apply `Paper White` (`#ffffff`) as the default background for all page sections and `Absolute Black` (`#171618`) for primary text to maintain high contrast and clarity.
- Implement `10px` `border-radius` for all primary and secondary buttons, and `20px` for all information cards, to ensure a consistent, approachable softness.
- Separate content sections with a `sectionGap` of `64px` for generous vertical breathing room, fostering a clean and open layout.
- Use `Feedback Violet` (`#38296c`), `Agent Blue` (`#004d60`), and `Insight Amber` (`#6c4800`) as primary chromatic accents, carefully distributing them to associate with specific product features or states.
- Limit interactive elements like buttons and primary navigation links to `Graphite` (`#727578`) for a muted, clean secondary interaction state.

## Don'ts

- Avoid using harsh or sharply angled design elements; opt for rounded corners, soft shadows, and subtle background changes instead.
- Do not introduce highly saturated or vivid colors into the main UI beyond the carefully curated accent and brand colors, reserving vivid colors for illustrations.
- Refrain from excessive use of box shadows; use the `rgba(239, 239, 239, 0.55) 0px 2px 15px 0px` shadow sparingly to suggest subtle elevation without heavy visual weight.
- Do not deviate from the `Inter` typeface for body copy, navigation, and button labels; its consistent application maintains readability and system unity.
- Avoid tight packing of content; utilize `elementGap` of `16px` and other specified padding values to ensure a comfortable and easily scannable interface.
- Do not use `#000000` as a primary foreground color; confine it to borders as indicated by data, defaulting to `Absolute Black` (`#171618`) for text.

## Layout

The page uses a maximum-width contained model (max-width `1447px`), centered, with content resting on a `Paper White` background. The hero section features a prominent, centered headline and subtext, flanked by whimsical 3D illustrations. Sections generally maintain generous vertical spacing (`sectionGap`). Content arrangement frequently includes stacked elements (headlines, buttons) and is text-dominant, allowing illustrations to 'breathe' in open spaces. Navigation is a sticky top bar with clearly defined interactive elements.

## Imagery

The visual language is characterized by whimsical 3D illustrated characters (e.g., stylized 'feedback agent' heads with hats) and abstract, organic shapes. These are used decoratively to add personality and visual interest, primarily in hero sections and feature highlights. The illustrations are bright, with vivid, saturated colors contrasting against the muted UI palette. Some product screenshots are contained within a rounded, shadowed card, serving an explanatory role. Icons are filled, simple, and monochrome, integrating seamlessly into the UI.

## Elevation

| Element | Style |
| --- | --- |
| Card | rgba(239, 239, 239, 0.55) 0px 2px 15px 0px |
| Hover Button | rgba(0, 0, 0, 0.08) 0px 1px 2px 0px, rgba(0, 0, 0, 0.12) 0px 0.5px 0px 0px |
| Dropdown/Menu | rgba(23, 24, 26, 0.1) 0px 0px 0px 1px, rgba(23, 24, 26, 0.03) 0px 8px 16px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | White-dominated UI with emphasis on clear typography and understated interactive elements, combined with occasional pastel accents. |
| Figma | Playful, friendly illustrations paired with a light, functional UI and distinct use of rounded corners for interactive elements. |
| Notion | Clean, spacious, and mostly monochromatic interface with a strong focus on content clarity and subtle interactive cues. |
| Height | SaaS platform visuals that combine crisp typography and a largely neutral palette with targeted use of vibrant, custom illustrations for brand personality. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: `#171618` (Absolute Black)
- Background: `#ffffff` (Paper White)
- CTA Primary: `#171618` (Absolute Black)
- CTA Secondary: `#727578` (Graphite)
- Border: `rgba(25, 23, 23, 0.16)` (Soft Border)
- Accent: `#38296c` (Feedback Violet)

### Example Component Prompts
1. **Create a Primary Action Button for 'Book a demo'**: `Absolute Black` background (`#171618`), `Paper White` text (`#ffffff`), `10px` border-radius, `12px` vertical padding, `16px` horizontal padding, `Inter` `weight 500` text at `16px` with `1.74` line-height.
2. **Generate a Product Agent Card for 'Understanding Customers'**: `Soft Lavender` background (`#e7e0fe`), `20px` border-radius. Title 'VoiceHunter' using `Eudoxus Sans` `weight 700` at `21px` with `1.4` line-height and `-0.63px` letter-spacing, color `Feedback Violet` (`#38296c`).
3. **Design a Hero Headline**: 'Together we ship alone' using `Eudoxus Sans` `weight 800` at `48px` with `1.05` line-height and `-1.39px` letter-spacing, color `Absolute Black` (`#171618`). Subtext using `Inter` `weight 400` at `16px`, `Graphite` color (`#727578`).
4. **Create a Primary Pill Badge indicating '5 features'**: `Sky Tint` background (`#cfeff8`), `Agent Blue` text (`#004d60`), `100px` border-radius, `Inter` `weight 500` at `14px`.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932013718-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932013718-thumb.jpg |
