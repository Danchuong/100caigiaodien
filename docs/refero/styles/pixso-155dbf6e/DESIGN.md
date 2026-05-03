# Pixso — Refero Style

- Refero URL: https://styles.refero.design/style/155dbf6e-1187-424e-9ce8-59ffecff7e6b
- Site URL: https://pixso.net
- ID: 155dbf6e-1187-424e-9ce8-59ffecff7e6b
- Theme: light
- Industry: design
- Created: 2026-03-29T10:38:19.000Z
- Ranks: newest: 982, popular: 527, trending: 710

> Architectural Blueprint on White Marble. This system feels like designs precisely laid out in a brightly lit, expansive modern studio.

## Description

Pixso embodies a digital workspace aesthetic, with clean lines and a functional layout that prioritizes content. Its visual mood is bright and accessible, achieved through ample white space and subtle, almost invisible grays. The deliberate use of soft, colorful gradients primarily for decorative elements and featured cards prevents the grayscale foundation from feeling sterile, adding a touch of playful innovation without overshadowing the core content.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Zero | #000000 | neutral | Primary text, critical borders, icons. Provides strong contrast against the light backgrounds, ensuring readability of all content. |
| Canvas White | #FFFFFF | neutral | Page backgrounds, card surfaces, primary button backgrounds. Dominant color for creating an expansive, clean feel. |
| Warm Mist | #F9F9FA | neutral | Subtle secondary backgrounds, button states. A near-white that adds minimal visual separation without appearing as a distinct color. |
| Slate Border | #EAEBEE | neutral | Inconspicuous borders, dividers between elements, secondary button backgrounds. Its light tone maintains the open feel. |
| Deep Graphite | #121212 | neutral | Dark secondary text, navigation items. Slightly softer than Absolute Zero, used for less prominent dark elements. |
| Cloud Whisper | #FAF8FD | neutral | Subtle background tint, almost imperceptible. Adds micro-texture without chromatic distraction. |
| Cool Teal | #CFE7ED | accent | Decorative card backgrounds signaling a fresh, innovative focus without being overtly branded. |
| Skybound Blue | #336FFF | brand | Primary interactive elements like CTA buttons and active states; brings a sense of reliability and trust (from '--v2--color-bg-brand-normal'). |
| Skybound Blue Hover | #4381FF | brand | Hover state for primary interactive elements; a slightly lighter blue to indicate affordance (from '--v2--color-bg-brand-hover'). |
| Cosmic Drift Gradient | #BFBFBF | accent | Decorative background gradient used sparingly on hero sections or prominent feature cards; adds a dimension of futuristic flair. |
| Horizon Burst Gradient | #BFBFBF | accent | Evocative background gradient for illustration features, suggesting creativity and expansive possibilities. |
| Dawn Spectrum Gradient | #BFBFBF | accent | Soft, engaging background for key value propositions, illustrating a journey from concept to reality. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Figtree | system-ui, sans-serif | 400, 500, 600, 700 | 12px, 13px, 14px, 16px, 18px, 24px, 28px, 30px, 34px, 48px, 50px, 60px | 1.10, 1.15, 1.17, 1.20, 1.21, 1.29, 1.30, 1.38, 1.40, 1.50, 1.55, 1.60, 1.61 | The sole typeface, used for all textual elements from navigation to body text and headings. Its clean, geometric sans-serif quality supports the modern, functional aesthetic without demanding attention, allowing content and subtle UI elements to shine. The wide range of weights and sizes provides a flexible typographic hierarchy. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | 0 |
| body | 14 | 1.6 | 0 |
| heading-sm | 18 | 1.4 | 0 |
| heading | 24 | 1.38 | 0 |
| heading-lg | 28 | 1.29 | 0 |
| display | 48 | 1.21 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "input": "0px",
    "buttons": "8px",
    "largeButtons": "12px",
    "decorativeRound": "18px"
  },
  "elementGap": "6px",
  "sectionGap": "64px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Hero CTA Button Group



### Design Resource Cards Grid



### Value Proposition Text Block



### Primary Action Button

**Role:** Core CTA for user actions

White background (`#FFFFFF`), Absolute Zero text (`#000000`), 12px border radius. 16px padding on all sides. Used for prominent 'Get started' actions.

### Secondary Action Button

**Role:** Alternative or less prominent actions

White background (`#FFFFFF`), Absolute Zero text (`#000000`), 18px border radius. Padding: 10px top/bottom, 10px left/right. Slightly more rounded to distinguish from primary. Has a text variant of font-size 13px.

### Ghost Button

**Role:** Tertiary actions, links, or navigation items

Transparent background (`rgba(0, 0, 0, 0)`), Absolute Zero text (`#000000`), 10px border radius. Padding: 10px top/bottom, 14px right, 12px left. Minimal visual weight for less emphasis.

### Small Button

**Role:** Compact actions, utility buttons

White background (`#FFFFFF`), Absolute Zero text (`#000000`), 8px border radius. Padding: 10px top/bottom, 20px left/right.

### Image Card (No Background)

**Role:** Displaying visual content without additional styling

Transparent background, 0px border radius, no shadow. Padding 0. Used for embedded examples or image-heavy layouts.

### Teal Accent Card

**Role:** Highlighting specific content, often decorative in nature

Cool Teal background (`#CFE7ED`), 8px border radius, no shadow, 0px padding. Acts as a subtle container against the white page.

### Background Detail Card

**Role:** Subtle background element or very light separation

Warm Mist background (`#F9F9FA`), 0px border radius, no shadow, 0px padding. Extremely low contrast for minimal visual impact.

### Subtle Teal Accent Card

**Role:** Minor highlights or visual breaks

Cool Teal background (`#CFE7ED`), 4px border radius, no shadow, 0px padding. A smaller, less prominent version of the Teal Accent Card.

### Text Input (Base)

**Role:** Standard user input fields

Transparent background, Absolute Zero text with 90% opacity, 0px border radius, 0px padding. Focus on functionality with minimal styling.

### Elevated Tooltip Button

**Role:** Interactive elements with a subtle lift, often in toolbars or secondary navigation.

White background (`#FFFFFF`), 8px border radius. Shadow: `rgba(0, 0, 0, 0.04) 0px 2px 4px 0px, rgba(0, 0, 0, 0.3) 0px 0px 1px 0px`.

## Do's

- Always use Figtree for all textual content, leveraging weights 400-700 to establish hierarchy rather than mixing font families.
- Maintain generous white space using Canvas White (`#FFFFFF`) as the dominant background color for pages and cards to foster an open, clean aesthetic.
- Apply an 8px border radius to most interactive elements like buttons and cards, creating a consistent soft rounding.
- Utilize Absolute Zero (`#000000`) for primary text and critical UI elements to ensure maximum readability and impact.
- Use Cool Teal (`#CFE7ED`) only as a background color for decorative cards or subtle feature highlights, not for typography or primary interactive elements.
- Prefer `padding-top: 10px`, `padding-right: 10px`, `padding-bottom: 18px`, `padding-left: 10px` for less prominent buttons to give them distinction from primary CTAs, using an 18px radius.
- Implement the Skybound Blue (`#336FFF`) for primary call-to-action buttons, ensuring a clear visual prompt for user engagement.

## Don'ts

- Do not introduce new font families; the system relies exclusively on Figtree.
- Avoid high-contrast, saturated colors for UI element backgrounds, maintaining the serene, clean feel through neutrals and subtle accents.
- Do not use hard, sharp shadows; instead, use the defined, soft elevation for buttons (`rgba(0, 0, 0, 0.04) 0px 2px 4px 0px, rgba(0, 0, 0, 0.3) 0px 0px 1px 0px`).
- Do not overcrowd sections; maintain a comfortable density with consistent element and section gaps.
- Avoid excessive gradients on functional elements; reserve them primarily for large decorative sections or illustrative backgrounds.
- Do not deviate from the established border radii; avoid sharp corners on interactive components or overly rounded, pill-like shapes outside specific button variants.
- Do not use dark backgrounds for main content areas; maintain the integrity of the light theme.

## Layout

The page primarily uses a max-width contained layout, with content centered within a generous Canvas White background. The hero section features a prominent, centered headline with a subtext and dual calls-to-action, optionally flanked by abstract 3D graphic elements on either side. Sections alternate between white and very light gray backgrounds (like Warm Mist or Slate Border), creating a subtle visual rhythm without harsh dividers. Content arrangements are generally centered stacks or two-column layouts (text on one side, image/illustration on the other). Feature grids are common, often presenting content in 3 or 4 columns. Navigation is a sticky top bar with a clear logo, global navigation links, and login/signup buttons. The density is comfortable, with ample vertical spacing between sections.

## Imagery

The site uses a mix of abstract 3D elements, product screenshots, and stylized flat icons. Product screenshots are typically tightly cropped UI examples of the Pixso product, often presented within UI frames, emphasizing functionality. Abstract 3D elements feature soft, organic shapes with soft gradients (e.g., violet, blue, orange, pink), serving as decorative flourishes that animate subtly and add a sense of modern digital artistry. Icons are outlined or filled, mostly monochromatic, and provide visual cues without dominating the layout. The overall language is explanatory and product-centric, with imagery serving to enhance understanding of software capabilities.

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Clean, collaborative design tool UI with a focus on simplicity and a light theme, using a sans-serif typeface and subtle elevation. |
| Linear | Functional, content-focused UI with a similar sans-serif typeface, strong negative space, and minimal decorative elements. |
| Miro | Online collaborative workspace. Shares a bright, approachable aesthetic with a strong emphasis on content and clear hierarchy, using a similar light theme. |
| Notion | Content-first digital workspace. Employs a clean, minimal design, extensive white space, and a sans-serif font for readability across various content types. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Text Primary:** `#000000` (Absolute Zero)
- **Page Background:** `#FFFFFF` (Canvas White)
- **CTA Button Background:** `#336FFF` (Skybound Blue)
- **Card Accent:** `#CFE7ED` (Cool Teal)
- **Subtle Border:** `#EAEBEE` (Slate Border)

### 3-5 Example Component Prompts
1. **Create a hero section:** background Canvas White (`#FFFFFF`). Headline: "Unify your UI/UX design workflow with Pixso" using Figtree, weight 700, 48px size, 1.21 lineHeight, Absolute Zero (`#000000`). Subtext: "Ideate, design, and handoff in one place. Enhance team collaboration with the AI-powered, all-in-one design tool." using Figtree, weight 400, 16px size, 1.5 lineHeight, Absolute Zero (`#000000`). Two buttons below the subtext: one Primary Action Button ("Get started") and one Secondary Action Button ("Generate designs with AI").
2. **Generate a feature card row:** three cards side-by-side. Each card is a Teal Accent Card (`#CFE7ED` background, 8px radius, 0px padding). Title inside each card is Figtree, weight 600, 18px size, 1.4 lineHeight, Absolute Zero (`#000000`). Body text is Figtree, weight 400, 14px size, 1.6 lineHeight, Absolute Zero (`#000000`).
3. **Design a navigation bar:** Canvas White (`#FFFFFF`) background. Logo left: Pixso in Absolute Zero (`#000000`). Navigation links: Figtree, weight 500, 14px size, 1.6 lineHeight, Deep Graphite (`#121212`). Right-aligned buttons: Ghost Button ("Log in") and Small Button ("Get started"). Navbar height should be 54px.
4. **Create a decorative image card:** using the Cool Teal (`#CFE7ED`) background, 8px border radius, 0px padding. Place a product screenshot inside, ensuring there are no rounded corners on the screenshot itself, maintaining its original form. The overall card should feel like a contained highlight rather than a heavily styled component.
5. **Render a call-to-action block in a section:** background Warm Mist (`#F9F9FA`). A headline like "Try Pixso for free today!" using Figtree, weight 700, 34px size, 1.2 LineHeight, Absolute Zero (`#000000`). Centered beneath, a Primary Action Button labeled "Start Designing Now" with White text and Skybound Blue background.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932887698-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932887698-thumb.jpg |
