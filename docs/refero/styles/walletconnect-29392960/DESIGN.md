# WalletConnect — Refero Style

- Refero URL: https://styles.refero.design/style/29392960-0acf-4891-ad33-28a72f6a9b75
- Site URL: https://walletconnect.com
- ID: 29392960-0acf-4891-ad33-28a72f6a9b75
- Theme: light
- Industry: fintech
- Created: 2026-04-30T01:27:33.292Z
- Ranks: newest: 597, popular: 1071, trending: 1043

> Digital ledger on white marble.

## Description

WalletConnect's design system evokes a digital ledger on a crisp white backdrop, emphasizing clarity and efficient data display. A vibrant spectrum of blues serves as the brand accent, signaling interactive elements and critical information without visual clutter. Typography is precise and utilitarian, supporting the feeling of a clean, functional interface where content takes precedence. Components are lightweight with subtle radii, avoiding heavy shadows or ornate flourishes to maintain an uncluttered visual plane.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, elevated card surfaces, body text on dark backgrounds |
| Paper White | #f9f9f9 | neutral | Default card backgrounds, subtle background distinction from canvas |
| Ash Gray | #e9e9e9 | neutral | Muted background for sections or tertiary cards, slight elevation distinction |
| Graphite | #202020 | neutral | Primary text, prominent headings, dark button backgrounds, focused borders |
| Midnight Ink | #1b2045 | neutral | Secondary text, subtle borders, high-contrast text on light backgrounds |
| Slate Gray | #4f4f4f | neutral | Medium-dark text for supporting information, input borders |
| Silver Mist | #787878 | neutral | Placeholder text, inactive element borders, subtle dividers |
| Light Steel | #bbbbbb | neutral | Tertiary card backgrounds, subtle borders contrasting with dark |
| Sky Blue | #cce2ff | brand | Subtle highlights, secondary background accents, light border tints |
| Azure Blue | #006cff | brand | Primary links, active navigation indicators, decorative borders — creates a vibrant pull against neutral tones |
| Action Blue | #4672ff | brand | Primary action button backgrounds, active states, focus rings — a bright, commanding blue for interactivity |
| Bright Blue | #66a7ff | brand | Outlined button borders, secondary interactive accents |
| Focus Shadow | #b3b3b3 | neutral | Subtle box shadow for focus or elevation |
| Sky Burst Radial | #099ff0 | brand | Hero section backgrounds, prominent accent fills for marketing elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| KHTeka | Inter | 400 | 13px, 14px, 16px, 18px, 20px, 24px, 30px, 36px | 1.00, 1.11, 1.20, 1.33, 1.40, 1.43, 1.46, 1.50, 1.56, 1.71 | Primary typeface for all UI elements, headings, body text, and links. Its clean, geometric form supports readability across all sizes, driving clarity. |
| Roboto | Roboto | 400, 500, 700 | 12px, 16px, 17px | 1.41, 1.50, 2.00 | Used for specific auxiliary text, such as some button labels, maintaining legibility for smaller informational notes. |
| KHTekaMono | Fira Code | 400 | 12px, 14px | 1.33, 1.43 | Monospaced font used for code snippets or technical details, offering clear character distinction, typically in cards. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.33 |  |
| body | 14 | 1.71 |  |
| heading | 18 | 1.4 |  |
| heading-lg | 20 | 1.33 |  |
| display | 36 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "default": "3px",
    "heroElement": "40px",
    "interactive": "16px"
  },
  "elementGap": "8px",
  "sectionGap": "32px",
  "cardPadding": "12px",
  "pageMaxWidth": "1600px"
}
```

## Components

### Ghost Navigation Button

**Role:** Top navigation links, secondary calls to action.

Transparent background, 'Midnight Ink' text, no border. Used for discrete, text-based actions.

### Default Small Button

**Role:** General purpose action button.

Canvas White background, 'Graphite' text, 16px border-radius, 11px vertical padding, 23px horizontal padding. A soft, approachable interactive element.

### Primary Action Button (Filled)

**Role:** Main call to action.

'Action Blue' background, 'Paper White' text, 3px border-radius, 10px vertical padding. This button is used sparingly to draw prominent attention to key user actions.

### Outline CTA Button

**Role:** Secondary call to action.

Canvas White background, 'Graphite' text, 'Graphite' border, 16px border-radius, 12px vertical padding, 18px horizontal padding. Offers a clear action without the strong visual weight of a filled button.

### Subtle Padding Card

**Role:** Generic card for content regions.

Transparent background, 0px border-radius, 0px padding-top/bottom, 8px padding-left/right. Used for structural grouping without adding visual weight.

### Rounded Edge Card (Top)

**Role:** Visually distinct card for section headers or feature blocks.

Light Steel background, 40px top-left and top-right border-radius, 0px for bottom corners. Used for creating unique section boundaries.

### Rounded Edge Card (Bottom)

**Role:** Visually distinct card for section footers or related content.

Ash Gray background, 0px top-left and top-right border-radius, 40px bottom-left and bottom-right border-radius, 32px padding. Provides a visual closure to content blocks.

### Rounded Corner Card

**Role:** General content card.

Transparent background, 40px border-radius, no shadow, no padding. Used for imagery or graphical elements that need a soft container.

### Input Field

**Role:** User input for forms.

Transparent background, 'Canvas White' text, 'Silver Mist' border, 16px border-radius, 12.5px vertical padding, 13px horizontal padding. Provides a clear, modern input area.

### Toast/Dialog Card

**Role:** Temporary information display, such as cookie preferences.

Paper White background, 16px padding-left/right, 40px border-radius, with a subtle 'Focus Shadow' (rgba(0, 0, 0, 0.3) 0px 0px 8px 0px). Provides a temporary overlay context.

### Badge (Text Only)

**Role:** Informational labels.

Transparent background, 'Graphite' text, 0px border-radius, 15px padding. Used for unobtrusive categorization or status indicators.

## Do's

- Prioritize 'Canvas White' (#ffffff) and 'Paper White' (#f9f9f9) for primary backgrounds to maintain a bright, open aesthetic.
- Use 'Action Blue' (#4672ff) exclusively for primary call-to-action button backgrounds and active states to ensure high impact and clarity.
- Employ 'KHTeka' font for all primary text elements, adjusting weight and size to establish hierarchy as defined in the type scale.
- Apply a 16px border-radius for all interactive elements like buttons and input fields to maintain visual consistency.
- Maintain a comfortable information density using an 8px 'elementGap' for most horizontal and vertical spacing between UI elements.
- Use 'Midnight Ink' (#1b2045) for secondary text and subtle borders to create distinction without over-saturating the interface with dark tones.
- Utilize a page max-width of 1600px, centering content within this constraint to provide ample breathing room and consistent layout.

## Don'ts

- Do not introduce new saturated colors outside the defined blue palette in primary UI elements; reserve them for specific content or imagery.
- Avoid using heavy drop shadows for elevation; instead, rely on subtle background color shifts and the single 'Focus Shadow' for distinction.
- Do not deviate from the specified border-radii; the 3px default, 16px for interactive elements, and 40px for large rounded elements are critical to the brand's shape language.
- Refrain from using `Roboto` or `KHTekaMono` for headings or extensive body copy; their roles are specific and should not be expanded.
- Do not use generic gray tones for borders or accents where a 'Sky Blue' (#cce2ff) or 'Azure Blue' (#006cff) could reinforce brand identity.
- Avoid tight, constrained layouts; aim for a comfortable density with ample whitespace, especially around content blocks and sections.
- Do not use text decoration (underline) on standard body links; reserve it for specific interactive states or functional UI elements.

## Layout

The page employs a max-width 1600px centered layout for content, but the hero section often uses full-bleed backgrounds often featuring gradients to establish a rich initial visual. Sections typically alternate between white '#ffffff' and light gray '#e9e9e9' or '#bbbbbb' backgrounds, creating a clear visual rhythm. Content is arranged in alternating text-left/image-right or image-left/text-right patterns, alongside centered stacks for calls to action and descriptive paragraphs. A notable feature is the use of rounded edge cards for distinct top and bottom section boundaries. The navigation is a sticky top bar with ghost buttons and a prominent 'Request Demo' button. Overall density is comfortable, with generous vertical spacing between sections.

## Imagery

The imagery style is product-focused, featuring tightly cropped product shots of abstract devices displaying QR codes and digital interfaces, often set against brand-blue backgrounds. Photography uses high-key lighting for clarity, positioning the object as the hero without lifestyle context. Illustrations are minimal, with a clean, vector-based style. Icons are primarily outlined or subtle fills, contributing to the lightweight UI aesthetic. The visual density heavily favors UI elements and text, with imagery serving as clear, direct product showcasing rather than decorative atmosphere.

## Elevation

| Element | Style |
| --- | --- |
| Card (Dialog/Toast) | rgba(0, 0, 0, 0.3) 0px 0px 8px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Shares a professional, modern aesthetic with a focus on clean typography, ample white space, and a measured use of brand-colored accents for interactive elements. |
| Ramp | Utilizes a crisp UI, strong blue accents against a light background, and a similar approach to functional, uncluttered component design for financial services. |
| Mercury | Employs a refined use of whitespace, precise typography, and a limited, purposeful brand color palette (blue) to evoke trustworthiness and efficiency in financial tech. |
| Checkout.com | Features a clean, data-driven interface with a prominent blue brand color, minimal shadows, and a strong emphasis on clear, readable information presentation. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #202020
background: #ffffff
border: #1b2045
accent: #006cff
primary action: #4672ff (filled action)

Example Component Prompts:
Create a Primary Action Button: #4672ff background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
Create a standard content card: 'Paper White' (#f9f9f9) background, 12px padding, 0px border-radius. Headline is 'KHTeka' 20px, #202020. Body text 'KHTeka' 14px, #1b2045.
Create an input field: transparent background, 'Silver Mist' (#787878) border, 16px border-radius, 12.5px vertical padding, 13px horizontal padding. Placeholder text is 'Silver Mist' 'KHTeca' 14px, weight 400.
Create a ghost navigation item: 'Midnight Ink' (#1b2045) text, no background, no border. Text is 'KHTeka' 16px, weight 400. On hover, text color changes to 'Azure Blue' (#006cff).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512425874-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512425874-thumb.jpg |
