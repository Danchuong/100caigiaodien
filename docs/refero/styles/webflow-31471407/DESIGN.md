# Webflow — Refero Style

- Refero URL: https://styles.refero.design/style/31471407-598a-45fd-a505-d921980d8855
- Site URL: https://webflow.com
- ID: 31471407-598a-45fd-a505-d921980d8855
- Theme: light
- Industry: devtools
- Created: 2026-03-20T20:05:49.000Z
- Ranks: newest: 1014, popular: 31, trending: 285

> Precise Blueprint on Stark Canvas — where every element serves a clear function against a bright, expansive backdrop.

## Description

Webflow's design system projects confident utility through a sharp, clean interface. A monochromatic foundation of stark blacks and whites is punctuated by a singular, vibrant blue, drawing focus to interactive elements. Typography is the primary conveyor of brand personality, with large, precisely tracked sans-serif headlines creating a modern, impactful presence while subtle shadows add depth to interactive elements without overwhelming the clean aesthetic.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card backgrounds, primary surface. |
| Ink Black | #080808 | neutral | Primary heading and body text, button text on light surfaces. |
| Slate Gray | #5a5a5a | neutral | Secondary text, muted icons, subtle borders. |
| Whisper Gray | #f0f0f0 | neutral | Subtle section backgrounds, alternative surface color for differentiation. |
| Outline Gray | #d8d8d8 | neutral | Dividers, input borders, inactive element outlines. |
| Webflow Blue | #146ef5 | brand | Primary calls to action, interactive elements, links, active states — provides a clear visual anchor for user interaction. |
| Sky Blue | #6ca7ff | brand | Accent text, secondary interactive elements, lighter shades of brand blue. |
| Emerald Green | #60ed76 | semantic | Highlighting success messages, occasional textual accents. |
| Amber Glow | #ffa666 | semantic | Highlighting attention points, warning-like accents. |
| Deep Blue Gradient | #146ef5 | brand | Background for feature sections, adding visual interest and depth to key areas. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| WF Visual Sans Variable | Inter | 400, 500, 550, 600 | 10px, 13px, 14px, 16px, 20px, 24px, 32px, 40px, 56px, 80px | 1.00, 1.04, 1.20, 1.30, 1.40, 1.50, 1.60 | Primary typeface for all text content including headings, body text, and UI elements. Its variable nature allows for precise visual hierarchy and strong visual impact at large sizes, while maintaining clarity in smaller text. |
| WFVisualSans-Mono | JetBrains Mono | 400 | 12px, 16px | 1.50, 1.60 | Used for technical content, code snippets, or areas requiring precise, monospaced alignment. Distinctive font features for enhanced readability of numerical and technical data. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | 0.1 |
| body | 16 | 1.5 |  |
| subheading | 20 | 1.4 |  |
| heading-sm | 24 | 1.3 |  |
| heading | 40 | 1.2 |  |
| heading-lg | 56 | 1.04 | -0.01 |
| display | 80 | 1 | -0.01 |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "1440px",
    "cards": "4px",
    "image": "8px",
    "buttons": "4px",
    "default": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "24px",
  "cardPadding": "16px",
  "pageMaxWidth": "1440px"
}
```

## Components

### Build Mode Selector Cards



### Feature List with Arrow Links



### Cookie Consent Banner



### Primary CTA Button

**Role:** Call to Action

Filled button with Webflow Blue background and Canvas White text, 4px border radius. Uses 16px horizontal padding.

### Secondary Ghost Button

**Role:** Secondary Action

Transparent background with Ink Black text and 1px Ink Black border, no border radius. Used for less prominent actions.

### Navigation Link Button

**Role:** Navigation/Menu

Transparent background with Ink Black text, no border or radius. Padding of 20px top and 19px bottom for visual separation in navigation.

### Compact Feature Card

**Role:** Informational Display

Card with Canvas White background, 4px border radius, and minimal shadow. Internal padding of 16px.

### Outline Tag Button

**Role:** Filter/Small Action

Transparent background with Ink Black text and 1px Ink Black border, no border radius. Compact padding of 1px vertical and 6px horizontal.

### Cookie Consent Banner

**Role:** Regulatory Notification

Bottom-fixed dark overlay with Canvas White text, featuring two primary interaction buttons: 'Reject all' (transparent with Webflow Blue border) and 'Accept all' (Webflow Blue filled).

## Do's

- Use WF Visual Sans Variable weight 600 for main headlines to convey importance with a modern, sharp tone.
- Apply Webflow Blue (#146ef5) exclusively to primary calls to action and critical interactive elements.
- Maintain a clear visual hierarchy by utilizing Ink Black (#080808) for primary text and Slate Gray (#5a5a5a) for secondary, descriptive content.
- Employ a 4px border-radius for all interactive buttons and smaller UI elements to establish a consistent subtle softness.
- Use the Ink Black to Canvas White (20:1) contrast for all essential text to ensure AAA legibility.
- Apply subtle, multi-layered shadows (e.g., rgba(0,0,0,0.01) 0px 54px 22px 0px) to interactive or elevated elements for depth, avoiding heavy dropshadows.

## Don'ts

- Do not introduce additional vibrant colors beyond the established Webflow Blue, Emerald Green, and Amber Glow accents.
- Avoid using flat black (#000000) for text; opt for Ink Black (#080808) for a softer, yet still direct, appearance.
- Do not use overly large line heights for headlines; maintain a tight `1.0` to `1.2` ratio to keep headlines compact and powerful.
- Refrain from varying letter-spacing on body text; apply only to large headlines with the specified negative tracking for impact.
- Do not use sharp 0px corners in functional components, except for subtle decorative elements like specific input borders.

## Layout

The site uses a max-width 1440px centered container for most content, creating a focused presentation. The hero section often features large, centered headlines followed by a subheading, establishing a bold and direct introduction. Content sections primarily use a clean, modular layout with both single-column stacks and multi-column grids (like 3-column cards). Vertical rhythm is maintained with consistent section gaps, creating breathing room between content blocks. The navigation is a sticky top bar with clear functional links and a Webflow Blue 'Start for free' CTA.

## Imagery

The visual language is UI-heavy, with product screenshots of the Webflow interface integrated to explain features rather than purely decorative photography. These product screenshots often feature subtle elevation via shadows. Minimal abstract or illustrative graphics are used sparingly with strong brand blue accents. Icons are monochromatic, contributing to the functional aesthetic. Imagery primarily serves an explanatory role, showcasing the product directly.

## Elevation

| Element | Style |
| --- | --- |
| Interactive Card | rgba(0, 0, 0, 0.01) 0px 54px 22px 0px, rgba(0, 0, 0, 0.04) 0px 30px 18px 0px, rgba(0, 0, 0, 0.08) 0px 13px 13px 0px, rgba(0, 0, 0, 0.09) 0px 3px 7px 0px |
| Elevated Image/Icon | rgba(0, 0, 0, 0.02) 0px 67px 27px 0px, rgba(0, 0, 0, 0.06) 0px 38px 23px 0px, rgba(0, 0, 0, 0.1) 0px 17px 17px 0px, rgba(0, 0, 0, 0.12) 0px 4px 9px 0px |
| Prominent Element (e.g. Hero Card) | rgba(0, 0, 0, 0.01) 0px 148px 42px 0px, rgba(0, 0, 0, 0.04) 0px 95px 38px 0px, rgba(0, 0, 0, 0.15) 0px 53px 32px 0px, rgba(0, 0, 0, 0.26) 0px 24px 24px 0px, rgba(0, 0, 0, 0.29) 0px 6px 13px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Shares a clean, UI-focused aesthetic with a prominent brand accent color on a largely neutral palette, emphasizing functionality. |
| Notion | Employs simple, modern typography and a high-contrast neutral palette to convey clarity and efficiency, with interactive elements highlighted by a single dominant color. |
| Vercel | Similar approach to typography for headlines and body text, using a versatile sans-serif for both bold statements and readable content within a developer-tool context. |
| Linear | Features a sharp, highly functional UI with a clear visual hierarchy built on a minimalist color scheme and precise typography, using a primary accent for key interactions. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: Ink Black (#080808)
- Background: Canvas White (#ffffff)
- CTA: Webflow Blue (#146ef5)
- Border: Outline Gray (#d8d8d8)
- Accent: Sky Blue (#6ca7ff)

### 3-5 Example Component Prompts
1. Create a hero section: Canvas White background. Headline at 80px WF Visual Sans Variable weight 600, Ink Black color, letter-spacing -0.01em. Subheading at 20px WF Visual Sans Variable weight 400, Slate Gray color. Below, a Primary CTA Button (Webflow Blue background, Canvas White text, 4px radius, 16px horizontal padding).
2. Design a feature card: Canvas White background, 4px border radius. Apply the 'Interactive Card' shadow (rgba(0, 0, 0, 0.01) 0px 54px 22px 0px, rgba(0, 0, 0, 0.04) 0px 30px 18px 0px, rgba(0, 0, 0, 0.08) 0px 13px 13px 0px, rgba(0, 0, 0, 0.09) 0px 3px 7px 0px). Use Ink Black for the title (24px WF Visual Sans Variable weight 550) and Slate Gray for body text (16px WF Visual Sans Variable weight 400).
3. Implement a navigation bar: Canvas White background. 'Webflow' logo in Ink Black (WF Visual Sans Variable weight 600, 24px). Navigation links using Navigation Link Button style (transparent background, Ink Black text, 16px WF Visual Sans Variable weight 400). A 'Start for free' Primary CTA Button (Webflow Blue background, Canvas White text, 4px radius, 16px horizontal padding).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776105387270-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776105387270-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/31471407-598a-45fd-a505-d921980d8855-1777554564180-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/31471407-598a-45fd-a505-d921980d8855-1777554564180-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/31471407-598a-45fd-a505-d921980d8855-1777554564180-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/31471407-598a-45fd-a505-d921980d8855-1777554564180-preview-detail-poster.jpg |
