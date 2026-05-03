# Hashnode — Refero Style

- Refero URL: https://styles.refero.design/style/6a8bf4c2-8cf2-463a-bcb9-36c15ea177c2
- Site URL: https://hashnode.com
- ID: 6a8bf4c2-8cf2-463a-bcb9-36c15ea177c2
- Theme: light
- Industry: media
- Created: 2026-03-10T14:37:54.000Z
- Ranks: newest: 1062, popular: 554, trending: 1227

> Architectural blueprint on white marble. Light, precise, and structured, guiding builders through their thoughts.

## Description

Hashnode's design evokes a sense of organized clarity, like a refined environment where complex ideas are constructed. Predominantly bright, near-white surfaces create a spacious, focused canvas, punctuated by sharp, technical typography and a singular, vibrant blue accent. Precision is communicated through crisp sans-serif lines, defined component boundaries, and minimal, intentional softening at corners, creating a sense of professional purpose.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Cloud White | #f9fafb | neutral | Page backgrounds, card surfaces, clean canvas for content creation. |
| Storm Gray | #f4f5f7 | neutral | Subtle background variation, UI elements that need mild distinction from primary surfaces. |
| Stone Dust | #e6e8eb | neutral | Very faint background accents, borders for a barely-there separation. |
| Charcoal Black | #16191c | neutral | Primary text, prominent headings, strong contrast against light backgrounds. |
| Carbon Slate | #1c2024 | neutral | Secondary text, slightly softer than Charcoal Black for readability in body copy. |
| Ash Mist | #7b8187 | neutral | Subtle text, metadata, disabled states, providing hierarchy without fading into the background. |
| Border Silver | #d1d4d9 | neutral | Component borders, dividers, subtle outlines for structure and separation. |
| Electric Indigo | #1d52de | brand | Primary interactive elements like CTA buttons, active links, important indicators – this is the site's only truly saturated brand color. |
| Success Green | #009966 | semantic | Semantic positive feedback, confirmations, success messages. |
| Vivid Green | #00bc7d | semantic | Semantic positive background, for elements that need to convey 'success' or 'new'. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| suisseIntl | Inter | 400, 500, 600, 700 | 12px, 14px, 16px, 18px, 20px, 30px | 1.00, 1.33, 1.38, 1.43, 1.50, 1.56, 1.63 | Primary brand typeface for all headings, body text, and UI elements. Its clean, technical aesthetic underpins the professional developer-focused identity. Specific feature settings 'ss01' likely provide alternative glyphs for a refined appearance. |
| Font Awesome 7 Jelly | Font Awesome 6 Free | 400, 900 | 14px, 16px, 18px, 20px | 1.00 | Used for decorative icons and some specific UI pictograms, providing a unique visual flavor for non-essential iconography. |
| Font Awesome 7 Pro | Font Awesome 6 Pro | 400, 900 | 12px, 14px, 18px | 1.00 | Standard UI icon set for functional elements, ensuring consistent and clear visual communication across the interface. |
| suisseMono | IBM Plex Mono | 600 | 10px | 1.43 | Monospaced font for code snippets or technical data, ensuring alignment and distinction from regular text. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | 0.6 |
| body-sm | 14 | 1.43 | 0.7 |
| body | 16 | 1.38 | 0.8 |
| subheading | 18 | 1.33 | -0.45 |
| heading | 20 | 1.5 | -0.5 |
| display | 30 | 1 | -0.75 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "1.67772e+07px",
    "cards": "10px-14px",
    "buttons": "10px",
    "default": "10px"
  },
  "elementGap": "",
  "sectionGap": "48px",
  "cardPadding": "",
  "pageMaxWidth": "1176px"
}
```

## Components

### Article Card — New & Popular



### What's New Notification Card



### Live Stats Bar + CTA Button Group



### Primary Button

**Role:** Main call to action

Background: Electric Indigo (#1d52de). Text: Cloud White (#f9fafb). Border radius: 10px. Padding: 6px vertical, 8px horizontal (smaller), or 0px vertical, 12px horizontal (larger), with a focus on text size.

### Ghost Button

**Role:** Secondary action or link-like button

Background: transparent. Text: Charcoal Black (#16191c). Border radius: 10px. Padding: 6px vertical, 8px horizontal.

### Badge Button

**Role:** Informational or count display

Background: transparent. Text: Charcoal Black (#16191c). Border radius: 1.67772e+07px (effectively pill-shaped). No padding, as content determines size.

### Menu Item Button

**Role:** Sidebar navigation items

Background: transparent. Text: Charcoal Black (#16191c). Border radius: 8px. Zero padding, as interaction area is likely larger due to layout.

### Thumbnail Card

**Role:** Small interactive cards or featured content

Background: Cloud White (#ffffff). Border: none. Shadow: none. Border radius: 10px. Padding: 10px on all sides. Used for small, contained content blocks like author profiles or mini-previews.

### Interactive Chip

**Role:** Small, clickable element, often for categories or filters

Background: transparent. Border: none. Shadow: none. Border radius: 1.67772e+07px (pill). No padding from component variants, but likely small internal text padding. Text: Electric Indigo (#1d52de).

## Do's

- Use suisseIntl (Inter) color Charcoal Black (#16191c) for all primary body text at 16px, lineHeight 1.5, letterSpacing 0.05em.
- Apply Electric Indigo (#1d52de) only to primary interactive elements like 'Start your blog' buttons or active navigation links.
- Implement Card borders using Border Silver (#d1d4d9) at 1px for subtle visual separation, primarily for the 'What's New' style cards.
- Maintain a clear visual hierarchy, using Charcoal Black (#16191c) for main headings and Carbon Slate (#1c2024), Ash Mist (#7b8187) for subtext and metadata.
- Utilize Cloud White (#f9fafb) as the dominant background color for content areas, creating a clean, focused environment.
- Ensure input fields and interactive elements default to a 10px border-radius, aligning with the site's general component rounding.
- Apply a consistent layout max-width of 1176px for main content areas, with a section vertical gap of 48px to create breathing room.

## Don'ts

- Do not introduce new saturated accent colors outside of Electric Indigo (#1d52de); maintain a largely achromatic palette.
- Avoid excessive use of shadows; the design relies on subtle borders and background color changes for separation, not pronounced drop shadows.
- Do not use highly rounded elements except for specific pill-shaped components like badges (radius 1.67772e+07px); most elements should use 10px or 14px radius.
- Do not use overly bold or decorative typography for headings; suisseIntl (Inter) at various weights should convey authority through clarity, not visual loudness.
- Avoid tight spacing between major sections; larger gaps like 48px are crucial for readability and information compartmentalization.
- Do not deviate from the specified suisseIntl letterSpacing values (-0.025em for larger text, 0.05em for smaller) as they are critical to the font's precise appearance.

## Layout

The page adheres to a max-width 1176px contained layout, centered on the screen, creating a focused content experience. The hero section features a split layout: prominent text on the left, a contained vector illustration on the right, resting on a subtly gradiented background. Content sections follow a consistent vertical rhythm with 48px gaps. Article listings use a grid layout where each item is a minimal card, emphasizing content over heavy visual decoration, laid out side-by-side. Navigation is handled by a sticky left sidebar containing primary links and a 'what's new' popout, alongside a conventional top bar for global actions and status.

## Imagery

The visual language for imagery is a mix of abstract, rounded vector illustrations and tightly cropped product screenshots or contextual photography. Illustrations are colorful but contained within defined shapes with soft, rounded corners (e.g., the hero illustration). Photography in article previews tends to be full-bleed within the card's image container, sometimes black and white or vibrant. Icons are primarily functional Font Awesome Pro, supplemented by more decorative Font Awesome Jelly for specific brand elements. Imagery serves a dual role: decorative atmosphere in hero sections and explanatory content/contextual previews within listings. Image density is moderate; sections are image-rich but not image-dominant.

## Elevation

| Element | Style |
| --- | --- |
| Hover/Interaction States | oklab(0 0 0 / 0.1) 0px 0px 0px 1px inset |

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Shares a clean, light aesthetic with a developer-focused, technical feel, strong sans-serif typography, and minimal use of color for branding. |
| Linear | Employs an extremely structured, almost grid-like layout with ample negative space and minimal use of primary colors to define a 'builder's tool' feel. |
| Notion | Features a light, content-first design with a strong emphasis on typography and structured information presentation, rather than heavy visual adornment. |
| Stripe | Uses a similar approach of sharp, modern sans-serif fonts, a neutral background, and strategic bursts of a single brand color to highlight interactivity and key information. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text Primary: #16191c
- Background Primary: #f9fafb
- CTA Button: #1d52de
- Border Default: #d1d4d9
- Accent Active: #1d52de

### Example Component Prompts
1. **Create a Hero Section:** Background: linear-gradient(90deg, #f9fafb, #f4f5f7). Left side: Headline 'Write to think. Publish to connect.' Text size 30px, suisseIntl weight 700, color #16191c, letter-spacing -0.75px. Subtext 'AI can generate...' suisseIntl weight 400, color #1c2024, size 16px, lineHeight 1.5, letterSpacing 0.8. Button 'Start your blog' background #1d52de, text #f9fafb, radius 10px, padding 0px 12px.
2. **Generate an Article Card:** Background transparent, border none, radius 0px, padding 16px 0px. Title 'My First High-Severity Bug...' suisseIntl weight 600, color #16191c, size 18px, lineHeight 1.33, letterSpacing -0.45px. Metadata '1d ago • 2 min' suisseIntl weight 400, color #7b8187, size 14px, lineHeight 1.43. Pill-shaped action buttons (e.g., '10') with transparent background, #16191c text, radius 1.67772e+07px.
3. **Design a 'What's New' Promotional Card:** Background #ffffff, border none, radius 14px, padding 20px. Title 'Introducing Hashnode Forums' suisseIntl weight 600, color #16191c, size 16px, lineHeight 1.38. Body 'Real conversations between real people...' suisseIntl weight 400, color #1c2024, size 14px, lineHeight 1.43.
4. **Build a Navigation Link:** Text 'Home' suisseIntl weight 500, color #16191c, size 16px. Icon 'home' Font Awesome 7 Pro, size 16px, color #16191c. On 'active' state, change text and icon color to #1d52de, with a subtle background color #f4f5f7 and radius 10px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932497065-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932497065-thumb.jpg |
