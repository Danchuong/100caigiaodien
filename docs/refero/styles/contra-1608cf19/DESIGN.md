# Contra — Refero Style

- Refero URL: https://styles.refero.design/style/1608cf19-b249-46d4-bd37-b4c6a7fc4b56
- Site URL: https://contra.com
- ID: 1608cf19-b249-46d4-bd37-b4c6a7fc4b56
- Theme: light
- Industry: design
- Created: 2026-04-30T00:50:25.870Z
- Ranks: newest: 685, popular: 899, trending: 741

> Frosted glass on dark slate; a refined digital workspace.

## Description

Contra embraces a sleek, desaturated design language with crisp typography and subtle interactions. The interface prioritizes clear content hierarchy on a largely achromatic canvas, punctuated by a deep slate gray for primary actions and occasional, carefully placed pops of vivid color within content modules. Component surfaces typically feature soft, rounded edges and minimal elevation, fostering a sense of approachability and digital craftsmanship.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, primary text on dark backgrounds |
| Midnight Slate | #222834 | neutral | Primary action button backgrounds, dark text on light backgrounds, prominent headings |
| Ash Gray | #14171f | neutral | Primary text, prominent UI elements, strong borders |
| Phantom Gray | #677084 | neutral | Muted text, helper text, subtle borders, inactive elements |
| Silver Pine | #9ba2b0 | neutral | Secondary text, disabled states, subtle borders |
| Porcelain | #e5e7eb | neutral | Dividers, hairline borders, input outlines |
| Ghost White | #f5f6f9 | neutral | Secondary surface backgrounds, subtle hover states |
| Charcoal Black | #000000 | neutral | Input borders, strong accents against light backgrounds |
| Cloud Gray | #d0d4dc | neutral | Icon fills, secondary button borders |
| Contra Violet | #6a57e3 | brand | Decorative card backgrounds, accent elements in content modules — a vivid, deep purple |
| Blush Pink | #45192f | accent | Decorative card backgrounds in certain content modules |
| Electric Pink | #cd74dd | accent | Decorative card backgrounds, vivid content accent |
| Coral Red | #ff5a5e | accent | Decorative card backgrounds, vibrant accent |
| Lavender Mist | #ddd8ff | accent | Softer decorative card backgrounds |
| Lime Zest | #f0fb96 | accent | Vivid green decorative card backgrounds, content accent |
| Ocean Spectrum | #cdefd0 | accent | Hero background gradient providing atmospheric visual depth |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GT Standard M | Inter | 400, 500, 600 | 12px, 14px, 15px, 16px, 24px | 1.15, 1.20, 1.33, 1.40, 1.43, 1.50, 1.60 | Primary font for all body text, navigation items, buttons, and most headings below the main hero. Its presence suggests a modern, functional aesthetic. |
| GT Standard L | Inter | 400, 500, 600 | 8px, 12px, 19px, 23px, 58px | 0.88, 1.05, 1.33, 1.39, 1.47 | Used sparingly for larger display text and specialized content, defining the headline visual presence with its distinct tracking. The very tight tracking at 58px gives headlines a condensed, impactful feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.4 | -0.14 |
| body-lg | 16 | 1.6 | -0.16 |
| subheading | 19 | 1.39 | 0.04 |
| heading-lg | 24 | 1.2 | -0.24 |
| display | 58 | 0.88 | -0.58 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "32px",
    "cards": "16px",
    "inputs": "0px",
    "avatars": "50%",
    "buttons": "24px",
    "modules": "10px"
  },
  "elementGap": "4px",
  "sectionGap": "65px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Filled Primary Button

**Role:** Calls to action, form submissions.

Background: Midnight Slate (#222834), Text: Canvas White (#ffffff), Border: none, Radius: 24px, Padding: 0px 24px (vertical padding derived from line-height).

### Ghost Button

**Role:** Secondary actions, filtering, navigation.

Background: transparent, Text: Ash Gray (#14171f), Border: none, Radius: 0px. Used for subtle interactions like filter tags.

### Outlined Input Field

**Role:** User input for forms, search bars.

Background: transparent, Text: Charcoal Black (#000000), Border: 1px solid Charcoal Black (#000000), Radius: 0px, Padding: variable. Placeholder text is Charcoal Black.

### Compact Filter Button

**Role:** Filtering and categorization within content sections.

Background: transparent or Ghost White (#f5f6f9), Text: Ash Gray (#14171f), Border: 1px solid Porcelain (#e5e7eb) or Charcoal Black (#000000), Radius: 50% (circular), Padding: 7px vertical.

### Content Card (Featured)

**Role:** Displaying articles, projects, or featured content.

Background: Canvas White (#ffffff), Border: none, Radius: 16px, Padding: 12px or 16px. Features a subtle bottom shadow: rgba(0,0,0,0.05) 0px 10px 20px 0px (nav card).

### Branded Content Card

**Role:** Showcasing specific branded content with unique backgrounds.

Background: Contra Violet (#6a57e3), Blush Pink (#45192f), Electric Pink (#cd74dd), Coral Red (#ff5a5e), Lavender Mist (#ddd8ff), or Lime Zest (#f0fb96). Text: Canvas White (#ffffff). Radius: 16px. These cards use vivid background colors from the accent palette, serving as eye-catching content blocks.

### Navigation Link

**Role:** Primary site navigation in the header and footer.

Text: Ash Gray (#14171f) or Phantom Gray (#677084). Default state is usually text-only, with no distinct background/border. Hover states are implied to change text color or apply subtle underline (visual evidence not clear, but standard interaction).

## Do's

- Use Midnight Slate (#222834) exclusively for filled primary buttons and the most prominent text on light backgrounds.
- Apply Canvas White (#ffffff) for all main page backgrounds and component surfaces to maintain a pristine aesthetic.
- Employ GT Standard L 58px with letter-spacing -0.58px for all main section headlines, giving them a distinct condensed aggression.
- Prioritize 24px border-radius for all interactive buttons and 16px for content cards to unify the component curvature.
- Maintain a clear visual hierarchy by limiting saturated colors to decorative content cards and subtle functional accents, keeping core UI achromatic.
- Utilize Phantom Gray (#677084) for secondary text, labels, and hair-thin dividers to preserve visual lightness.
- Ensure input fields have sharp, 0px radius borders in Charcoal Black (#000000) for a precise, functional appearance.

## Don'ts

- Do not use highly saturated colors for button backgrounds or primary text unless it’s a specific branded content block.
- Avoid heavy shadows or gradients on core UI elements; elevation should be minimal and primarily achieved with the provided soft shadows.
- Do not use default system fonts; always specify GT Standard M or L, or their designated substitutes.
- Refrain from using more than two distinct text sizes within a single component to prevent visual clutter.
- Do not introduce new border radii beyond the defined 24px, 16px, 10px, 4px, 32px, 40px, and 50% for consistency.
- Never use less than 4px element spacing; maintain a minimum of 4px between adjacent elements.
- Do not apply excessive padding; adhere to the 12px card padding and ensure button padding is symmetrical from the center.

## Layout

The page maintains a centered max-width layout for most content, with a full-bleed hero section at the top featuring a subtle gradient background and centered headline. Content sections follow a consistent vertical rhythm, often alternating between a single-column block and a multi-column (e.g., 4-column) grid of content cards. Navigation is handled by a sticky top bar. Content arrangement often features text-dominant sections followed by image-rich grids. The overall density is balanced, allowing breathing room between sections while presenting information in a structured, digestible manner.

## Imagery

The site uses a mixture of diverse imagery: product screenshots, abstract graphics, and some lifestyle/candid photography within content modules. Product screenshots are typically contained and framed, often with contextual UI elements. Abstract graphics are used decoratively, integrating with the card backgrounds. Photography, when present, is diverse in style but generally contained within card components rather than full-bleed heroes. Icons are minimalist, primarily outlined or filled in achromatic tones. Imagery is utilized both for decorative atmosphere and to showcase creative work, but doesn't dominate page density; text remains a strong focus.

## Elevation

| Element | Style |
| --- | --- |
| Card (Navigation) | rgba(0, 0, 0, 0.05) 0px 10px 20px 0px |
| Button | rgba(34, 40, 52, 0.05) 0px 4px 10px 0px, rgba(34, 40, 52, 0.04) -2px 18px 18px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Bēhance | Showcases creative portfolios with strong visual cards and a clean, project-focused layout. |
| Dribbble | Emphasizes visual content with cards and a focus on creative professionals, featuring similar subtle achromatic UI with pops of color. |
| Webflow | Features a modern, crisp aesthetic with well-defined cards, clean typography, and a strategic use of color and subtle backgrounds. |
| Linear | Exhibits highly refined, minimalistic UI with a strong emphasis on typography, soft neutrals, and efficient information display. |
| Framer | Utilizes a similar approach to showcasing design work and product features with sharp typography, structured layouts, and limited, impactful color accents. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #14171f
background: #ffffff
border: #e5e7eb
accent: #6a57e3
primary action: #222834 (filled action)

Example Component Prompts:
1. Create a Hero Section: Background is 'Ocean Spectrum' gradient. Headline 'Get more creative' in GT Standard L 58px, weight 400, #14171f, letter-spacing -0.58px. Subtext 'Contra is the commission-free creative network...' in GT Standard M 16px, weight 400, #677084.
2. Create a Primary Action Button: #222834 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
3. Create a Branded Content Card: Background 'Contra Violet' (#6a57e3), text 'Latest Insights' in Canvas White (#ffffff), GT Standard M 14px weight 500. Radius 16px, padding 12px. Include a small icon inside using Canvas White fill.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510188808-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510188808-thumb.jpg |
